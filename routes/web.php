<?php
/**
 |------------------------------------------------------------------------
 |Importación de controladores
 |------------------------------------------------------------------------
 |En esta parte importamos los controladores que utilizaremos.
 |Para ello utilizamos la ruta de donde se encuentra el controlador
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\UniversidadController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\SedesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/solicitantes', function () {
    return view('solicitantes.index');
});

Route::get('/solicitantes/create', [EmpleadosController::class,'create']);
*/


/*
 |--------------------------------------------------------------------------
 |Rutas web Globales
 |--------------------------------------------------------------------------
 |Para optimizar trabajo y no llamar ruta por ruta como lo hicimos anteriormente
 |Creamos rutas globales que acceden a cada vista del controlador
 |
 */
Route::resource('solicitantes', EmpleadosController::class);
Route::resource('Universidades', UniversidadController::class);
Route::resource('Programas', ProgramasController::class);
Route::resource('Sedes', SedesController::class);