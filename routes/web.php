<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main.home');
});

Route::get('/login', function () {
    return view('auth.login');
});
