<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\colegiosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Ruta para obtener todos los colegios:
Route::get('/colegios', [colegiosController::class, 'index']);
