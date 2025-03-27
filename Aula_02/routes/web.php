<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{param}/{para}', function ($param, $para) {
    return $param. '-'. $para;
});

Route::prefix('usuarios')->group(function(){
    Route::get('/edit', function(){
        return 'edit';
    });
    Route::get('/delete', function(){
        return 'delete';
    });
});

Route::get('/dados-de-usuarios/{user}', function(\App\Models\User $user){
    return $user;
});