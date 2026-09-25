<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('areas', [AreaController::class,'index'])->name('api.v1.areas.index');
Route::post('areas', [AreaController::class,'store'])->name('api.v1.areas.store');
Route::get('areas/{area}', [AreaController::class,'show'])->name('api.v1.areas.show');
Route::put('areas/{area}',[AreaController::class,'update'])->name('api.v1.area.update');
Route::delete('areas/{area}',[AreaController::class,'destroy'])->name('api.v1.area.destroy');

Route::get('trainingcenters', [TrainingCenterController::class,'index'])->name('api.v1.trainingcenters.index');
Route::post('trainingcenters', [TrainingCenterController::class,'store'])->name('api.v1.trainingcenters.store');
Route::get('trainingcenters/{trainingcenter}', [TrainingCenterController::class,'show'])->name('api.v1.trainingcenters.show');
Route::put('trainingcenters/{trainingcenter}',[TrainingCenterController::class,'update'])->name('api.v1.trainingcenter.update');
Route::delete('trainingcenters/{trainingcenter}',[TrainingCenterController::class,'destroy'])->name('api.v1.trainingcenter.destroy');

Route::get('computers', [ComputerController::class,'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class,'store'])->name('api.v1.computers.store');
Route::get('computers/{computer}', [ComputerController::class,'show'])->name('api.v1.computers.show');
Route::put('computers/{computer}',[ComputerController::class,'update'])->name('api.v1.computer.update');
Route::delete('computers/{computer}',[ComputerController::class,'destroy'])->name('api.v1.computer.destroy');


// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "api" middleware group. Make something great!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });