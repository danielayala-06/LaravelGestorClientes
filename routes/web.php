<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\colegiosController;
use App\Http\Controllers\apoderadosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Ruta para obtener todos los colegios:
Route::get('/colegios', [colegiosController::class, 'index']);

//Ruta para mostrar la vista del proyecto
Route::get('/apoderados',[apoderadosController::class, 'index']);