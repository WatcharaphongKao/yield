<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_yield;
use Carbon\Carbon;

use DataTables;
use DB;

class ReportController extends Controller
{
    //

    private function getYieldData($grade, $start, $end)
    {
        $sum_yield_first = add_yield::join('type_yield', 'add_yield.type_yield', '=', 'type_yield.type_yield_code');
        // กำหนดวันที่จากปี เดือน และวัน
        if ($start && $end) {
            $sum_yield_first->whereBetween('add_yield.created_at_yeild', [$start, $end]);
        }
        $sum_yield_first = $sum_yield_first;
        if ($grade == 'all') {
            $sum_yield_first->whereIn('type_yield.grade', ['1', '2', '3', 'D']);
        } else {
            $sum_yield_first->where('type_yield.grade', $grade);
        }
        $sum_yield_first = $sum_yield_first
            ->where('add_yield.status', 0)
            ->selectRaw(
                'SUM(add_yield.weight) as total_weight_today, MAX(status_notify) as status_notify,
                 SUM(CASE WHEN add_yield.status_notify = 1 THEN add_yield.weight ELSE 0 END) as total_weight_status_notify_1',
            )
            ->first();

        // dd($yesterdayStart);

        $sum_yield_second = add_yield::join('type_yield', 'add_yield.type_yield', '=', 'type_yield.type_yield_code');
        // กำหนดวันที่จากปี เดือน และวัน
        if ($start && $end) {
            $sum_yield_second->whereBetween('add_yield.created_at_yeild', [$start, $end]);
        }

        $sum_yield_second = $sum_yield_second
            ->where('add_yield.status', 0)
            ->whereIn('type_yield.grade', [1, 2, 3, 'D'])
            ->selectRaw('SUM(add_yield.weight) as total_weight_all_grade')
            ->first();
        $total_weight_today = $sum_yield_first->total_weight_today ?? 0;
        $total_weight_all_grade = $sum_yield_second->total_weight_all_grade ?? 0;

        // คำนวณเปอร์เซ็นต์
        $percentage_today = 0;
        if ($total_weight_all_grade > 0) {
            $percentage_today = ($total_weight_today / $total_weight_all_grade) * 100;
        } else {
            $percentage_today = $total_weight_today > 0 ? 100 : 0;
        }

        return [
            'total_weight_today' => $total_weight_today,
            'status_notify' => $sum_yield_first->status_notify,
            'total_weight_status_notify_1' => $sum_yield_first->total_weight_status_notify_1,
            'percentage_today' => round($percentage_today, 2),
        ];
    }

    public function sum_yields(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');
        // dd($start);

        $yield_1st = $this->getYieldData('1', $start, $end);
        $yield_2nd = $this->getYieldData('2', $start, $end);
        $yield_3rd = $this->getYieldData('3', $start, $end);
        $yield_d = $this->getYieldData('D', $start, $end);
        $yield_all = $this->getYieldData('all', $start, $end);

        return response()->json([
            'total_weight_1st_today' => $yield_1st['total_weight_today'],
            'status_notify_1st' => $yield_1st['status_notify'],
            'percentage_1st_today' => $yield_1st['percentage_today'],
            'total_weight_status_notify_1_1st' => $yield_1st['total_weight_status_notify_1'],
            'total_weight_2nd_today' => $yield_2nd['total_weight_today'],
            'status_notify_2nd' => $yield_2nd['status_notify'],
            'percentage_2nd_today' => $yield_2nd['percentage_today'],
            'total_weight_status_notify_1_2nd' => $yield_2nd['total_weight_status_notify_1'],
            'total_weight_3rd_today' => $yield_3rd['total_weight_today'],
            'status_notify_3rd' => $yield_3rd['status_notify'],
            'percentage_3rd_today' => $yield_3rd['percentage_today'],
            'total_weight_status_notify_1_3rd' => $yield_3rd['total_weight_status_notify_1'],
            'total_weight_d_today' => $yield_d['total_weight_today'],
            'status_notify_d' => $yield_d['status_notify'],
            'percentage_d_today' => $yield_d['percentage_today'],
            'total_weight_status_notify_1_d' => $yield_d['total_weight_status_notify_1'],
            'total_weight_all_today' => $yield_all['total_weight_today'],
            'status_notify_all' => $yield_all['status_notify'],
            'percentage_all_today' => '100',
            'total_weight_status_notify_1_all' => $yield_all['total_weight_status_notify_1'],
        ]);
    }

    public function index(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        // dd($start);

        // ดึง line จากฐานข้อมูล mysql3
        $lines = DB::connection('mysql3')
            ->table('stop_manufacture as s')
            ->select('id_zone as line', 'ch_stop' ,'ch_begin_man') // เพิ่ม 'ch_stop'
            ->whereRaw('LENGTH(id_zone) = 1')
            ->whereNotIn('id_zone', ['8', 'T'])
            ->where('date_stop', function ($query) {
                $query->select(DB::raw('MAX(date_stop)'))->from('stop_manufacture')->whereColumn('id_zone', 's.id_zone');
            })
            ->orderBy('id_zone', 'ASC')
            ->get();

        // สร้าง array ของ line สำหรับใช้ในการกรอง
        $lineIds = $lines->pluck('line')->toArray();

        // สร้าง query จาก add_yield โดยใช้ line ที่ดึงมาจาก mysql3
        $query = DB::table('add_yield as ay')
            ->leftJoin('type_yield as ty', 'ay.type_yield', '=', 'ty.type_yield_code')
            ->select('ay.line', DB::raw("SUM(CASE WHEN ty.grade = '1' THEN ay.weight ELSE 0 END) AS grade_1"), DB::raw("SUM(CASE WHEN ty.grade = '2' THEN ay.weight ELSE 0 END) AS grade_2"), DB::raw("SUM(CASE WHEN ty.grade = '3' THEN ay.weight ELSE 0 END) AS grade_3"), DB::raw("SUM(CASE WHEN ty.grade = 'D' THEN ay.weight ELSE 0 END) AS grade_D"), DB::raw('SUM(ay.weight) AS total_weight'))
            ->where('ay.status', '=', 0)
            ->whereIn('ty.grade', [1, 2, 3, 'D'])
            ->whereIn('ay.line', $lineIds); // ใช้ whereIn แทน join

        // กำหนดวันที่จากปี เดือน และวัน
        if ($start && $end) {
            $query->whereBetween('ay.created_at_yeild', [$start, $end]);
        }

        $query->groupBy('ay.line');
        $results = $query->get();

        // แปลงผลลัพธ์ของ $results เป็น array โดยใช้ line เป็น key เพื่อให้ค้นหาได้ง่าย
        $resultMap = $results->keyBy('line');

        // สร้าง array เพื่อเก็บข้อมูล
        $data = [];
        foreach ($lines as $line) {
            $lineCode = $line->line;
            $lineInfo = $resultMap->get($lineCode);

            $data[] = [
                'line' => $lineCode,
                'grade_1' => $lineInfo ? $lineInfo->grade_1 : 0,
                'grade_2' => $lineInfo ? $lineInfo->grade_2 : 0,
                'grade_3' => $lineInfo ? $lineInfo->grade_3 : 0,
                'grade_D' => $lineInfo ? $lineInfo->grade_D : 0,
                'total_weight' => $lineInfo ? $lineInfo->total_weight : 0,
                'ch_stop' => $line->ch_stop,
                'ch_begin_man' => $line->ch_begin_man,
            ];
        }

        // ส่งข้อมูลเป็น JSON
        return response()->json([
            'data' => $data,
            'draw' => intval($request->input('draw')),
            'recordsTotal' => count($data),
            'recordsFiltered' => count($data),
        ]);
    }

    public function recent_yield(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        // Build the query with join
        $query = add_yield::query()->join('type_yield', 'add_yield.type_yield', '=', 'type_yield.type_yield_code')->where('add_yield.status', 0);
        // สร้างวันที่จากปี เดือน และวัน
        if ($start && $end) {
            $query->whereBetween('add_yield.created_at_yeild', [$start, $end]);
        }

        // Select specific columns from both tables
        $yields = $query->select('add_yield.*', 'type_yield.grade', 'type_yield.type_yield as typeYield')->orderBy('add_yield.created_at', 'desc')->get();

        $recentyields = $yields->map(function ($yield) {
            // dd($yield->created_at);
            $time = $yield->created_at->diffForHumans();
            $timeWithoutAgo = str_replace(' ago', '', $time);
            return [
                'time' => $timeWithoutAgo,
                'title' => $yield->line . '/' . $yield->count . '/' . $yield->color . '/' . $yield->quality,
                'type_yield' => $yield->typeYield,
                'weight' => $yield->weight,
                'status' => $yield->status,
            ];
        });

        return response()->json($recentyields);
    }

    public function update_status_notify_blink(Request $request)
    {
        $start = $request->input('start');
        $end = $request->input('end');

        // ทำการอัปเดตสถานะ notify ตาม filter และ year ที่ส่งมา
        // นี่เป็นตัวอย่าง คุณสามารถปรับให้เข้ากับโครงสร้างข้อมูลจริงของคุณ
        try {
            // ตัวอย่างการค้นหาข้อมูลที่ตรงตามเงื่อนไข
            $results = add_yield::query()->where('created_at', '<', now()->subMinute(2)); // เลือกเรคคอร์ดที่ถูกสร้างภายใน 1 นาทีที่ผ่านมา
            // สร้างวันที่จากปี เดือน และวัน
            // if ($start && $end) {
            //     $results->whereBetween('created_at_yeild', [$start, $end]);
            // }

            // อัปเดตสถานะเป็น 0
            $results->update(['status_notify' => 0]);

            // ส่งผลลัพธ์กลับไปในรูปแบบ JSON
            return response()->json(['success' => true, 'message' => 'Status updated successfully.', 'results' => $results]);
        } catch (\Exception $e) {
            // หากมีข้อผิดพลาดในการอัปเดต
            return response()->json(['success' => false, 'message' => 'Error updating status: ' . $e->getMessage()], 500);
        }
    }
}
