<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/', function () {
    return view('main.home');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login/handle-login', [AuthController::class, 'login'])->name('handle-login');

Route::get('/register', function () {
    return view('auth.register');
});


Route::middleware(['checkRole'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
});

