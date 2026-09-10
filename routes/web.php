<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\AdvertisementController;

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\EventoController;

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

// Rutas de Anuncios
Route::get('/anuncios', [AnuncioController::class, 'index'])->name('anuncios.index');
Route::get('/anuncios/{id}', [AnuncioController::class, 'show'])->name('anuncios.show');

// Rutas de Ofertas
Route::get('/ofertas', [OfertaController::class, 'index'])->name('ofertas.index');
Route::get('/ofertas/{id}', [OfertaController::class, 'show'])->name('ofertas.show');

// Rutas de Eventos
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

Route::get('/about', function () { return view('about'); })->name('about');

/* Auth */
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');

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

Route::get('program/create',[ProgramController::class,'create'])->name('program.create');
Route::post('program/admin',[ProgramController::class,'admin'])->name('program.admin');
Route::get('program/list',[ProgramController::class,'index'])->name('program.index');
Route::get('program/{id}',[ProgramController::class,'show'])->name('program.show');
Route::get('program/{programs}/editar',[ProgramController::class,'edit'])->name('program.edit');
Route::put('program/{programs}',[ProgramController::class,'update'])->name('program.update');
Route::delete('program/{programs}',[ProgramController::class,'destroy'])->name('program.destroy');

Route::get('offer/create',[OfferController::class,'create'])->name('offer.create');
Route::post('offer/admin',[OfferController::class,'admin'])->name('offer.admin');
Route::get('offer/list',[OfferController::class,'index'])->name('offer.index');
Route::get('offer/{id}',[OfferController::class,'show'])->name('offer.show');
Route::get('offer/{offers}/editar',[OfferController::class,'edit'])->name('offer.edit');
Route::put('offer/{offers}',[OfferController::class,'update'])->name('offer.update');
Route::delete('offer/{offers}',[OfferController::class,'destroy'])->name('offer.destroy');

Route::get('cohort/create',[CohortController::class,'create'])->name('cohort.create');
Route::post('cohort/admin',[CohortController::class,'admin'])->name('cohort.admin');
Route::get('cohort/list',[CohortController::class,'index'])->name('cohort.index');
Route::get('cohort/{id}',[CohortController::class,'show'])->name('cohort.show');
Route::get('cohort/{cohorts}/editar',[CohortController::class,'edit'])->name('cohort.edit');
Route::put('cohort/{cohorts}',[CohortController::class,'update'])->name('cohort.update');
Route::delete('cohort/{cohorts}',[CohortController::class,'destroy'])->name('cohort.destroy');

Route::get('environment/create',[EnvironmentController::class,'create'])->name('environment.create');
Route::post('environment/admin',[EnvironmentController::class,'admin'])->name('environment.admin');
Route::get('environment/list',[EnvironmentController::class,'index'])->name('environment.index');
Route::get('environment/{id}',[EnvironmentController::class,'show'])->name('environment.show');
Route::get('environment/{environments}/editar',[EnvironmentController::class,'edit'])->name('environment.edit');
Route::put('environment/{environments}',[EnvironmentController::class,'update'])->name('environment.update');
Route::delete('environment/{environments}',[EnvironmentController::class,'destroy'])->name('environment.destroy');

Route::get('advertisement/create',[AdvertisementController::class,'create'])->name('advertisement.create');
Route::post('advertisement/admin',[AdvertisementController::class,'admin'])->name('advertisement.admin');
Route::get('advertisement/list',[AdvertisementController::class,'index'])->name('advertisement.index');
Route::get('advertisement/{id}',[AdvertisementController::class,'show'])->name('advertisement.show');
Route::get('advertisement/{advertisements}/editar',[AdvertisementController::class,'edit'])->name('advertisement.edit');
Route::put('advertisement/{advertisements}',[AdvertisementController::class,'update'])->name('advertisement.update');
Route::delete('advertisement/{advertisements}',[AdvertisementController::class,'destroy'])->name('advertisement.destroy');