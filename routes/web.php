<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConcertController;
use App\Http\Controllers\ConciertosController;
use App\Http\Controllers\ArtistasController;
use App\Http\Controllers\BoletosController;

Route::get('/', [HomeConcertController::class, 'index'])->name('home');

// Secciones
Route::get('/conciertos', [ConciertosController::class, 'index'])->name('conciertos.index');
Route::get('/conciertos/{slug}', [ConciertosController::class, 'show'])->name('conciertos.show');

Route::get('/artistas', [ArtistasController::class, 'index'])->name('artistas.index');
Route::get('/boletos', [BoletosController::class, 'index'])->name('boletos.index');



