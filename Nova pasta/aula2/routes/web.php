<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{param}/{param2}', function ($param, $param2) {
    return $param.'-'. $param2;
});

Route::prefix('usuarios')->group(function () {
    Route::get('/edit', function () {
        return 'edit';
    });Route::get('/delete', function () {
        return 'delete';
    });
});
