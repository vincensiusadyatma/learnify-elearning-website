<?php

namespace App\Http\Controllers\Core;
use App\Models\Enrollment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show_dashboard(){
        $user = Auth::user();
        $enrollments = Enrollment::where('user_id', $user->id)
        ->latest() // Buat ngurutin berdasarkan kolom 'created_at' secara descending
        ->take(3) // Mengambil 3 entri atau data  terbaru
        ->with('course') // Eager loading relasi 'course' (buat melakukan join)
        ->get();

        // Mendapatkan kursus dari enrollments
        $courses = $enrollments->map(function ($enrollment) {
        return $enrollment->course;
        });

          return view('dashboard.dashboard',compact('courses'));
    }

    public function show_profile(){
        return view('dashboard.profile');
    }
}
