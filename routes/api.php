<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\AdvertisementController;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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

Route::get('courses', [CourseController::class,'index'])->name('api.v1.courses.index');
Route::post('courses', [CourseController::class,'store'])->name('api.v1.courses.store');
Route::get('courses/{course}', [CourseController::class,'show'])->name('api.v1.courses.show');
Route::put('courses/{course}',[CourseController::class,'update'])->name('api.v1.course.update');
Route::delete('courses/{course}',[CourseController::class,'destroy'])->name('api.v1.course.destroy');

Route::get('teachers', [TeacherController::class,'index'])->name('api.v1.teachers.index');
Route::post('teachers', [TeacherController::class,'store'])->name('api.v1.teachers.store');
Route::get('teachers/{teacher}', [TeacherController::class,'show'])->name('api.v1.teachers.show');
Route::put('teachers/{teacher}',[TeacherController::class,'update'])->name('api.v1.teacher.update');
Route::delete('teachers/{teacher}',[TeacherController::class,'destroy'])->name('api.v1.teacher.destroy');

Route::get('apprentices', [ApprenticeController::class,'index'])->name('api.v1.apprentices.index');
Route::post('apprentices', [ApprenticeController::class,'store'])->name('api.v1.apprentices.store');
Route::get('apprentices/{apprentice}', [ApprenticeController::class,'show'])->name('api.v1.apprentices.show');
Route::put('apprentices/{apprentice}',[ApprenticeController::class,'update'])->name('api.v1.apprentice.update');
Route::delete('apprentices/{apprentice}',[ApprenticeController::class,'destroy'])->name('api.v1.apprentice.destroy');

Route::get('programs', [ProgramController::class,'index'])->name('api.v1.programs.index');
Route::post('programs', [ProgramController::class,'store'])->name('api.v1.programs.store');
Route::get('programs/{program}', [ProgramController::class,'show'])->name('api.v1.programs.show');
Route::put('programs/{program}',[ProgramController::class,'update'])->name('api.v1.program.update');
Route::delete('programs/{program}',[ProgramController::class,'destroy'])->name('api.v1.program.destroy');

Route::get('offers', [OfferController::class,'index'])->name('api.v1.offers.index');
Route::post('offers', [OfferController::class,'store'])->name('api.v1.offers.store');
Route::get('offers/{offer}', [OfferController::class,'show'])->name('api.v1.offers.show');
Route::put('offers/{offer}',[OfferController::class,'update'])->name('api.v1.offer.update');
Route::delete('offers/{offer}',[OfferController::class,'destroy'])->name('api.v1.offer.destroy');

Route::get('cohorts', [CohortController::class,'index'])->name('api.v1.cohorts.index');
Route::post('cohorts', [CohortController::class,'store'])->name('api.v1.cohorts.store');
Route::get('cohorts/{cohort}', [CohortController::class,'show'])->name('api.v1.cohorts.show');
Route::put('cohorts/{cohort}',[CohortController::class,'update'])->name('api.v1.cohort.update');
Route::delete('cohorts/{cohort}',[CohortController::class,'destroy'])->name('api.v1.cohort.destroy');

Route::get('environments', [EnvironmentController::class,'index'])->name('api.v1.environments.index');
Route::post('environments', [EnvironmentController::class,'store'])->name('api.v1.environments.store');
Route::get('environments/{environment}', [EnvironmentController::class,'show'])->name('api.v1.environments.show');
Route::put('environments/{environment}',[EnvironmentController::class,'update'])->name('api.v1.environment.update');
Route::delete('environments/{environment}',[EnvironmentController::class,'destroy'])->name('api.v1.environment.destroy');

Route::get('advertisements', [AdvertisementController::class,'index'])->name('api.v1.advertisements.index');
Route::post('advertisements', [AdvertisementController::class,'store'])->name('api.v1.advertisements.store');
Route::get('advertisements/{advertisement}', [AdvertisementController::class,'show'])->name('api.v1.advertisements.show');
Route::put('advertisements/{advertisement}',[AdvertisementController::class,'update'])->name('api.v1.advertisement.update');
Route::delete('advertisements/{advertisement}',[AdvertisementController::class,'destroy'])->name('api.v1.advertisement.destroy');

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