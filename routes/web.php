<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function() {
    return view('inicio');
});

Route::get('/login', function (){
    return view('login');
});