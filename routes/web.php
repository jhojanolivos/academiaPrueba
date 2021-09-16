<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

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
    return view('template');
})->name("inicio");

Route::get('/formulario',[EstudianteController::class,"index"]    
)->name("form");

 Route::get('/listado', [EstudianteController::class,"showAll"]
 )->name("list");

Route::post('/formulario',[EstudianteController::class,"store"]    
)->name("formstore");

 Route::post('/listado',[EstudianteController::class,"call"]    
 )->name("call");


