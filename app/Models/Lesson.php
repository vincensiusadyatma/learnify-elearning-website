<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'lesson_content',
        'course_id'
    ];

    public function previousLesson()
    {
        return Lesson::where('id', '<', $this->id)
            ->where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function nextLesson()
    {
        return Lesson::where('id', '>', $this->id)
            ->where('course_id', $this->course_id)
            ->orderBy('id', 'asc')
            ->first();
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
