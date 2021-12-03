<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PensumController;
use App\Http\Controllers\PlanEstudioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('alumnos', AlumnoController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('evaluaciones', EvaluacionController::class);
Route::resource('horarios', HorarioController::class);
Route::resource('materias', MateriaController::class);
Route::resource('notas', NotaController::class);
Route::resource('pensum', PensumController::class);
Route::resource('planes', PlanEstudioController::class);
