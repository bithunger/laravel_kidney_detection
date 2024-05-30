<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DetectionModelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

// Upload and detection kidney disease url
Route::get('upload-kidney-image', function () {
    return view('backend.report.create');
});
Route::post('report', [ReportController::class, 'predict'])->name('report');


Auth::routes();
Route::group(['middleware' => ['auth', 'role_as']], function () {
    // detection-model-setting
    Route::get('admin/detection-model-setting', [DetectionModelController::class, 'detection_model'])->name('detection.model.index');
    Route::patch('admin/detection-model-setting/update', [DetectionModelController::class, 'detection_model_update'])->name('detection.model.update');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
