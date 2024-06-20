<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Core;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all courses
        $courses = Course::getAllCourses();

        return view('dashboard.course', ['courses' => $courses]);
    }

    public function myCourses()
    {
        // Mendapatkan kursus yang diambil oleh pengguna yang sedang diautentikasi
        $user = Auth::user();

        $enrollments = Enrollment::where('user_id', $user->id)->with('course')->get();
        $courses = $enrollments->map(function ($enrollment) {
            return $enrollment->course;
        });

        // Mengembalikan tampilan dengan data kursus
        return view('dashboard.myCourse', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
