<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Genrecontroller;
use App\Http\Controllers\CastController;


Route::get('/coba', function () {
    return view('master');
});

Route::get('/form', function () {
    return view('form');
});

route::get('/genre/create', [Genrecontroller::class,'create'])->name('genre.create');
route::post('/genre', [Genrecontroller::class,'store'])->name('genre.store');
route::get('/genre', [Genrecontroller::class,'index'])->name('genre.index');
route::get('/genre/{id}', [Genrecontroller::class,'show'])->name('genre.show');
route::put('/genre/{id}', [Genrecontroller::class,'update'])->name('genre.update');
route::get('/genre/{id}/edit', [Genrecontroller::class,'edit'])->name('genre.edit');
route::delete('/genre/{id}', [Genrecontroller::class,'destroy'])->name('genre.delete');

route::get('/cast/create', [CastController::class,'create'])->name('cast.create');
route::post('/cast', [CastController::class,'store'])->name('cast.store');
route::get('/cast', [CastController::class,'index'])->name('cast.index');
route::get('/cast/{id}', [CastController::class,'show'])->name('cast.show');
route::put('/cast/{id}', [CastController::class,'update'])->name('cast.update');
route::get('/cast/{id}/edit', [CastController::class,'edit'])->name('cast.edit');
route::delete('/cast/{id}', [CastController::class,'destroy'])->name('cast.delete');