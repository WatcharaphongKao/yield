<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YieldController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;

use App\Http\Middleware\UsernameSessionMiddleware;

// Login
Route::get('/', function () {
    return view('login.login');
});
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// dashboard_report_in_meeting
Route::get('/dashboard_meeting', function () {
    return view('dashboard_meeting.dashboard_meeting');
});
// dashboard_report_in_Program
Route::get('/dashboard_report', function () {
    return view('dashboard_report.dashboard_report');
});
Route::get('/sum_yields', [ReportController::class, 'sum_yields']);
Route::get('/Yield_dataTable', [ReportController::class, 'index'])->name('Yield_dataTable');
Route::get('/recent_yield', [ReportController::class, 'recent_yield']);
// update_status_notify_blink
Route::get('/update_status_notify_blink', [ReportController::class, 'update_status_notify_blink']);

Route::middleware([UsernameSessionMiddleware::class])->group(function () {
    // add yield
    Route::get('/yield', function () {
        return view('add_yield.add_yield');
    });
    Route::get('/yield_dataTable', [YieldController::class, 'index'])->name('dataTable');
    //type
    Route::get('/type_yield', [YieldController::class, 'type_yield']);

    Route::get('/CountModel', [YieldController::class, 'CountModel']);
    Route::get('/ColorModel', [YieldController::class, 'ColorModel']);
    Route::get('/QualityModel', [YieldController::class, 'QualityModel']);
    Route::get('/LineModel', [YieldController::class, 'LineModel']);
    // insert
    Route::post('/Form_yield', [YieldController::class, 'insert']);
    Route::get('/yields/{id}/edit', [YieldController::class, 'edit'])->name('yields.edit');

    //update_status
    Route::post('/update_status_yield', [YieldController::class, 'updateStatus'])->name('update_status_yield');

    // // dashboard_report
    // Route::get('/dashboard_report', function () {
    //     return view('dashboard_report.dashboard_report');
    // });
    // Route::get('/sum_yields', [ReportController::class, 'sum_yields']);
    // Route::get('/Yield_dataTable', [ReportController::class, 'index'])->name('Yield_dataTable');
    // Route::get('/recent_yield', [ReportController::class, 'recent_yield']);
    // // update_status_notify_blink
    // Route::get('/update_status_notify_blink', [ReportController::class, 'update_status_notify_blink']);
});
//end-middleware
