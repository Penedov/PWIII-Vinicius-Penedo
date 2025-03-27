<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrada', function () {
    return view('entrada');
});

Route::get('/usuario', function () {
    return view('usuario');
});

