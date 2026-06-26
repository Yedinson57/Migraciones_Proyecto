<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;

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
Route::get('/', function () { return view('home'); })->name('home');

Route::get('area/create',[AreaController::class,'create']);
Route::post('area/admin',[AreaController::class,'admin'])->name('area.admin');

Route::get('trainingcenter/create',[TrainingCenterController::class,'create']);
Route::post('trainingcenter/admin',[TrainingCenterController::class,'admin'])->name('trainingcenter.admin');

Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/admin',[ComputerController::class,'admin'])->name('computer.admin');

Route::get('course/create',[CourseController::class,'create']);
Route::post('course/admin',[CourseController::class,'admin'])->name('course.admin');

Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/admin',[TeacherController::class,'admin'])->name('teacher.admin');

Route::get('apprentice/create',[ApprenticeController::class,'create']);
Route::post('apprentice/admin',[ApprenticeController::class,'admin'])->name('apprentice.admin');

