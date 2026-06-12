<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;

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
Route::post('area/category',[AreaController::class,'category'])->name('area.category');

Route::get('trainingcenter/create',[TrainingCenterController::class,'create']);
Route::post('trainingcenter/center',[TrainingCenterController::class,'center'])->name('trainingcenter.center');

Route::get('computer/create',[ComputerController::class,'create']);
Route::post('computer/type',[ComputerController::class,'type'])->name('computer.type');