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
Route::get('area/list',[AreaController::class,'index'])->name('area.index');
Route::get('area/{id}',[AreaController::class,'show'])->name('area.show');

Route::get('trainingcenter/create',[TrainingCenterController::class,'create']);
Route::post('trainingcenter/admin',[TrainingCenterController::class,'admin'])->name('trainingcenter.admin');
Route::get('trainingcenter/list',[TrainingcenterController::class,'index'])->name('trainingcenter.index');
Route::get('trainingcenter/{id}',[TrainingcenterController::class,'show'])->name('trainingcenter.show');

Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/admin',[ComputerController::class,'admin'])->name('computer.admin');
Route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');

Route::get('course/create',[CourseController::class,'create']);
Route::post('course/admin',[CourseController::class,'admin'])->name('course.admin');
Route::get('course/list',[CourseController::class,'index'])->name('course.index');
Route::get('course/{id}',[CourseController::class,'show'])->name('course.show');

Route::get('teacher/create',[TeacherController::class,'create']);
Route::post('teacher/admin',[TeacherController::class,'admin'])->name('teacher.admin');
Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');

Route::get('apprentice/create',[ApprenticeController::class,'create']);
Route::post('apprentice/admin',[ApprenticeController::class,'admin'])->name('apprentice.admin');
Route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');

