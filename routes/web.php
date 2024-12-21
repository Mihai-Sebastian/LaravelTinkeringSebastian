<?php

use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('pelicules', PeliculaController::class);
Route::get('/pelicules/create', [PeliculaController::class, 'create'])->name('pelicules.create');
Route::get('/pelicules/{id}/edit', [PeliculaController::class, 'edit'])->name('pelicules.edit');
Route::put('/pelicules/{id}', [PeliculaController::class, 'update'])->name('pelicules.update');

Route::resource('series', SerieController::class);
Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');
Route::get('/series/{id}/edit', [SerieController::class, 'edit'])->name('series.edit');
Route::put('/series/{id}', [SerieController::class, 'update'])->name('series.update');
