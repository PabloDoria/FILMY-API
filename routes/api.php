<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\PersonajeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('pelicula', PeliculaController::class);
Route::put('/pelicula/{id}', [PeliculaController::class, 'update']);
Route::delete('/pelicula/{id}', [PeliculaController::class, 'destroy']);

Route::resource('personaje', PersonajeController::class);
Route::put('/personaje/{id}', [PersonajeController::class, 'update']);
Route::delete('/personaje/{id}', [PersonajeController::class, 'destroy']);