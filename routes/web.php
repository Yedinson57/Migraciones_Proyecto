<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;

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

Route::get('area/create',[AreaController::class,'create']);
Route::post('area/admin',[AreaController::class,'admin'])->name('area.admin');

Route::get('trainingcenter/create',[TrainingCenterController::class,'create']);
Route::post('trainingcenter/admin',[TrainingCenterController::class,'admin'])->name('trainingcenter.admin');

Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/admin',[ComputerController::class,'admin'])->name('computer.admin');

Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/admin',[TeacherController::class,'admin'])->name('teacher.admin');