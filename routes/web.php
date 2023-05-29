<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adopta;
use App\Http\Controllers\procesos;
use App\Http\Controllers\main;
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

Route::get('/',[main::class, 'mostrarPrincipal']);

Route::get('adopta/perros',[adopta::class, 'mostrarPerro']);

Route::get('adopta/gatos',[adopta::class, 'mostrarGato']);

Route::get('adopta/otros',[adopta::class, 'mostrarOtros']);

Route::get('procesos/formulario',[procesos::class, 'mostrarFormulario']);

Route::get('procesos/confirmacion',[procesos::class, 'mostrarConfirmacion']);