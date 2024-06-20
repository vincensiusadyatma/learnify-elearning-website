<?php


namespace App\Http\Controllers\Core;
use App\Models\Course;

use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function showByCourse($courseId)
    {
        $course = Course::findOrFail($courseId); 
        $lessons = Lesson::where('course_id', $courseId)->get();
        return view('dashboard.list-lesson', compact('course', 'lessons'));
    }

    public function show($courseId, $lessonId)
    {
        $course = Course::findOrFail($courseId);
        $lesson = Lesson::findOrFail($lessonId);
        $previousLesson = $lesson->previousLesson();
        $nextLesson = $lesson->nextLesson();
    
        return view('dashboard.lesson', compact('course', 'lesson', 'previousLesson', 'nextLesson'));
    }
    
    public function index()
    {
        //
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
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
