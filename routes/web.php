<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\colegiosController;
use App\Http\Controllers\apoderadosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', 
    function() { return view('dashboard');
});

//Ruta para obtener todos los colegios:
Route::get('/colegios', [colegiosController::class, 'index']);

//Ruta para mostrar la vista del proyecto
Route::get('/clientes',[apoderadosController::class, 'index']);