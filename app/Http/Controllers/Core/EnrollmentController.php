<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Core;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function enroll(Course $course)
    {
        // Pastikan pengguna sedang diautentikasi
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to login to enroll in a course.');
        }
        
        // Cek apakah pengguna sudah terdaftar dalam kursus
        $user = Auth::user();
        if ($user->enrollments->contains('course_id', $course->id)) {
            notify()->error('Anda sudah mengambil course ini');
            return redirect('/dashboard/course')->with('error', 'You are already enrolled in this course.');
        }
        
        // Lakukan proses pendaftaran pengguna ke kursus
        Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
        ]);

        // Redirect pengguna ke halaman enrollment setelah berhasil mendaftar
        return redirect('/dashboard')->with('success', 'You have successfully enrolled in the course.');
    }
}
