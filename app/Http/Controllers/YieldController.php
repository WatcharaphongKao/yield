<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_yield;
use App\Models\TypeModel;
use App\Models\CountModel;
use App\Models\ColorModel;
use App\Models\QualityModel;
use App\Models\LineModel;
use DataTables;
use DB;

use App\Services\LineNotifyService;
use Illuminate\Support\Facades\Validator;

class YieldController extends Controller
{
    //
    public function index(Request $request)
    {
        $line_search = $request->input('line_search');
        $type_search = $request->input('type_search');
        $date_search = $request->input('date_search');

        // dd($date_search);

        $add_yield = DB::table('add_yield')->join('type_yield', 'add_yield.type_yield', '=', 'type_yield.type_yield_code')->select('add_yield.*', 'type_yield.grade', 'type_yield.type_yield');

        if ($line_search) {
            $add_yield->where('add_yield.line', $line_search);
        }
        if ($type_search) {
            $add_yield->where('add_yield.type_yield', $type_search);
        }
        if ($date_search) {
            $add_yield->where('add_yield.created_at_yeild', $date_search);
        }
        return DataTables::query($add_yield)
            ->addIndexColumn()
            ->addColumn('Detail', function ($record) {
                return '
                 <button class="btn btn-light text-secondary" id="open_modal"  data-id="' .
                    $record->id .
                    '"><i class="fa fa-edit"></i></button>
                        ';
            })
            ->addColumn('status_update', function ($record) {
                $statusClass = $record->status == 1 ? 'bg-danger' : 'bg-success';
                $statusText = $record->status == 1 ? 'Cancel' : 'Success';
                $department = session('user.department');
                $name = session('user.name');
                $level = session('user.level');
                if ($department == 'D005' || (in_array($department, ['D010','D012']) && $level == 'Manager') || in_array($name, ['watcharaphong'])) {
                    return '
                        <div class="dropdown">
                            <span class="status-p ' .
                        $statusClass .
                        ' dropdown-toggle" role="button" id="dropdownMenuButton-' .
                        $record->id .
                        '" data-bs-toggle="dropdown" aria-expanded="false">
                                ' .
                        $statusText .
                        '
                            </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton-' .
                        $record->id .
                        '" data-name="' .
                        $record->yield_code .
                        '" data-product="' .
                        $record->line .
                        '/' .
                        $record->count .
                        '/' .
                        $record->color .
                        '/' .
                        $record->quality .
                        '">
                                <li><a class="dropdown-item update_status" href="#" data-id="' .
                        $record->id .
                        '" data-status="0">Success</a></li>
                                <li><a class="dropdown-item update_status" href="#" data-id="' .
                        $record->id .
                        '" data-status="1">Cancel</a></li>
                            </ul>
                        </div>
                    ';
                } else {
                    return '
                        <div>
                            <span class="status-p ' .
                        $statusClass .
                        '">
                                ' .
                        $statusText .
                        '
                            </span>
                        </div>
                    ';
                }
            })

            ->rawColumns(['Detail', 'status_update'])
            ->toJson();
    }

    public function type_yield(Request $request)
    {
        $type_yield = TypeModel::orderBy('type_yield', 'asc')->get();
        return response()->json($type_yield);
    }
    public function CountModel(Request $request)
    {
        $CountModel = CountModel::all();
        return response()->json($CountModel);
    }

    public function ColorModel(Request $request)
    {
        $ColorModel = ColorModel::orderBy('color', 'asc')->get();
        return response()->json($ColorModel);
    }

    public function QualityModel(Request $request)
    {
        $QualityModel = QualityModel::orderBy('quality', 'asc')->get();
        return response()->json($QualityModel);
    }
    public function LineModel(Request $request)
    {
        $LineModel = LineModel::all();
        return response()->json($LineModel);
    }

    protected $lineNotify;

    public function __construct(LineNotifyService $lineNotify)
    {
        $this->lineNotify = $lineNotify;
    }
    public function generateJobCode($add_yield)
    {
        $currentDate = date('ymd');
        $latestYield = add_yield::where('yield_code', 'like', 'YC-' . $currentDate . '%')
            ->orderBy('yield_code', 'desc')
            ->first();

        if ($latestYield) {
            $lastNumber = (int) substr($latestYield->yield_code, strlen('YC-' . $currentDate));
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $add_yield->yield_code = 'YC-' . $currentDate . '' . str_pad($newNumber, 5, '0', STR_PAD_LEFT);
        return [
            'yield_code' => $add_yield->yield_code,
        ]; // คืนค่าทั้ง yield_code และ message
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'created_at_yeild' => 'required',
            'line' => 'required',
            'count' => 'required',
            'color' => 'required',
            'quality' => 'required',
            'type_yield' => 'required',
            'weight' => 'required',
            'description' => 'required',
        ]);

        $id = addslashes($request->input('id'));
        $created_at_yeild = $request->input('created_at_yeild');
        $line = addslashes($request->input('line'));
        $count = addslashes($request->input('count'));
        $color = addslashes($request->input('color'));
        $quality = addslashes($request->input('quality'));
        $type_yield = addslashes($request->input('type_yield'));
        $weight = addslashes($request->input('weight'));
        $description = addslashes($request->input('description'));

        $department = $request->session()->get('department.department_name');
        $updated_by = $request->session()->get('user.name');

        if (!$id) {
            $add_yield = new add_yield();
            $add_yield->department = $department;
            $add_yield->created_by = $updated_by;
            $result = $this->generateJobCode($add_yield);
            $yield_code = $result['yield_code'];
        } else {
            $add_yield = add_yield::find($id); // Find the existing record
            if (!$add_yield) {
                return response()->json(['success' => false, 'message' => 'Yield not found']);
            } else {
                $add_yield->updated_by = $updated_by;
            }
        }
        $add_yield->created_at_yeild = $created_at_yeild;
        $add_yield->line = $line;
        $add_yield->count = $count;
        $add_yield->color = $color;
        $add_yield->quality = $quality;
        $add_yield->type_yield = $type_yield;
        $add_yield->weight = $weight;
        $add_yield->description = $description;
        $add_yield->status_notify = 1;
        $add_yield->save();

        $results_type = DB::table('add_yield')
            ->join('type_yield', 'add_yield.type_yield', '=', 'type_yield.type_yield_code')
            ->select('add_yield.type_yield', 'type_yield.type_yield') // แก้ไขการเลือกฟิลด์ที่ต้องการ
            ->where('type_yield.type_yield_code', '=', $add_yield->type_yield)
            ->first(); // ใช้ first() เพื่อคืนค่าเพียง 1 แถว

        $message = $id ? 'Yield updated successfully' : 'Insert Yield successfully';
        $message .= "\nYield Code: " . $add_yield->yield_code;
        $message .= "\nLine: " . $add_yield->line;
        $message .= "\nProduct: " . $add_yield->count . '/' . $add_yield->color . '/' . $add_yield->quality;
        $message .= "\nType: " . ($results_type->type_yield ?? ''); // ตรวจสอบว่ามีข้อมูลหรือไม่
        $message .= "\nWeight: " . $add_yield->weight;
        $message .= "\nCreated By: " . $add_yield->created_by;
        $message .= "\nDepartment: " . $add_yield->department;
        $message .= "\nTime: " . now();

        if (!$id) {
            $stickerPackageId = 11539;
            $stickerId = 52114114;
            $result = $this->lineNotify->sendNotification($message, $stickerPackageId, $stickerId);
        }
        return response()->json(['success' => true, 'message' => $message]);
    }

    public function updateStatus(Request $request)
    {
        // ตรวจสอบความถูกต้องของข้อมูล
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:add_yield,id', // ต้องเป็น 0 หรือ 1 เท่านั้น
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        // ดึงข้อมูลที่ต้องการอัปเดต
        $add_yield = add_yield::find($request->input('id'));

        if (!$add_yield) {
            return response()->json(['success' => false, 'message' => 'Yield not found']);
        }

        // อัปเดตสถานะ
        $add_yield->status = $request->input('status');
        $add_yield->updated_by = $request->session()->get('user.name');

        try {
            $add_yield->save();

            // ส่งข้อความการแจ้งเตือน
            $status = $request->input('status');
            if ($status == 0) {
                $message = 'Status Success successfully';
            } elseif ($status == 1) {
                $message = 'Status Cancel successfully';
            }

            $message .= "\nYield Code: " . $add_yield->yield_code;
            $message .= "\nLine: " . $add_yield->line;
            $message .= "\nProduct: " . $add_yield->count . '/' . $add_yield->color . '/' . $add_yield->quality;
            $message .= "\nWeight: " . $add_yield->weight;
            $message .= "\nCreated By: " . $add_yield->created_by;
            $message .= "\nUpdated By: " . $add_yield->updated_by;
            $message .= "\nDepartment: " . $add_yield->department;
            $message .= "\nTime: " . now();

            return response()->json(['success' => true, 'message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update status: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        // dd($id);
        // $add_yield = DB::table('add_yield')->find($id);
        $add_yield = DB::table('add_yield')->where('id', $id)->first();

        // ตรวจสอบว่ามีข้อมูล
        if ($add_yield) {
            // จัดการฟิลด์ weight ให้แสดงทศนิยม 2 ตำแหน่ง
            $add_yield->weight = number_format($add_yield->weight, 2);
        }

        return response()->json($add_yield);
    }
}
