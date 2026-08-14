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

Route::get('/about', function () { return view('about'); })->name('about');

Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area/admin',[AreaController::class,'admin'])->name('area.admin');
Route::get('area/list',[AreaController::class,'index'])->name('area.index');
Route::get('area/{id}',[AreaController::class,'show'])->name('area.show');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::delete('area/{area}',[AreaController::class,'destroy'])->name('area.destroy');

Route::get('trainingcenter/create',[TrainingCenterController::class,'create'])->name('trainingcenter.create');
Route::post('trainingcenter/admin',[TrainingCenterController::class,'admin'])->name('trainingcenter.admin');
Route::get('trainingcenter/list',[TrainingcenterController::class,'index'])->name('trainingcenter.index');
Route::get('trainingcenter/{id}',[TrainingcenterController::class,'show'])->name('trainingcenter.show');
Route::get('trainingcenter/{trainingcenter}/editar',[TrainingcenterController::class,'edit'])->name('trainingcenter.edit');
Route::put('trainingcenter/{trainingcenter}',[TrainingcenterController::class,'update'])->name('trainingcenter.update');
Route::delete('trainingcenter/{trainingcenter}',[TrainingcenterController::class,'destroy'])->name('trainingcenter.destroy');

Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer/admin',[ComputerController::class,'admin'])->name('computer.admin');
Route::get('computer/list',[ComputerController::class,'index'])->name('computer.index');
Route::get('computer/{id}',[ComputerController::class,'show'])->name('computer.show');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::delete('computer/{computer}',[ComputerController::class,'destroy'])->name('computer.destroy');

Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course/admin',[CourseController::class,'admin'])->name('course.admin');
Route::get('course/list',[CourseController::class,'index'])->name('course.index');
Route::get('course/{id}',[CourseController::class,'show'])->name('course.show');
Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('course.edit');
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
Route::delete('course/{course}',[CourseController::class,'destroy'])->name('course.destroy');

Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher/admin',[TeacherController::class,'admin'])->name('teacher.admin');
Route::get('teacher/list',[TeacherController::class,'index'])->name('teacher.index');
Route::get('teacher/{id}',[TeacherController::class,'show'])->name('teacher.show');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::delete('teacher/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');

Route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentice.create');
Route::post('apprentice/admin',[ApprenticeController::class,'admin'])->name('apprentice.admin');
Route::get('apprentice/list',[ApprenticeController::class,'index'])->name('apprentice.index');
Route::get('apprentice/{id}',[ApprenticeController::class,'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}',[ApprenticeController::class,'destroy'])->name('apprentice.destroy');


