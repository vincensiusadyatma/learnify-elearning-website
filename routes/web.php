<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\LessonController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Core\CourseController;
use App\Http\Controllers\Core\DashboardController;
use App\Http\Controllers\Core\EnrollmentController;

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
        return view('admin.dashboard-admin');
    });
});

// Route group untuk User
Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'show_dashboard']);
    Route::get('/dashboard/course',[CourseController::class, 'index']);
    Route::get('/dashboard/profile',[DashboardController::class,'show_profile']);

    Route::get('/enrollments/{course}', [EnrollmentController::class, 'enroll'])->name('enrollments.enroll');
    Route::get('/dashboard/your-course', [CourseController::class, 'myCourses'])->name('my-courses');

    Route::get('dashboard/courses/{course}/lessons', [LessonController::class, 'showByCourse'])->name('courses.lessons');
    Route::get('/dashboard/courses/{course}/lessons/{lesson}', [LessonController::class, 'show'])->name('courses.lessons.show');

});
