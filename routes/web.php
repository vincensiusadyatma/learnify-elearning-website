<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main.home');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

