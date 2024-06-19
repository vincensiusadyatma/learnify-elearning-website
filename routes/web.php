<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// default url
Route::get('/', function () {
    
    return view('main.home');
});


// AUTH url
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register',[AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register/handle-register',[AuthController::class, 'register'])->name('handle-register');
Route::post('/login/handle-login', [AuthController::class, 'login'])->name('handle-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');





// Route group untuk Admin
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard.dashboard-admin');
    });

    
});

// Route group untuk User
Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });

    
});
