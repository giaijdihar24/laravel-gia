<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::get('/coba', function () {
    return view('master');
});

Route::get('/form', function () {
    return view('form');
});