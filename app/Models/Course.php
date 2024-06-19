<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $guarded = ['id'];

    protected $fillable = [
        'course_name',
        'course_category',
        'description',
        'img_path'
    ];

    use HasFactory;

    public static function getAllCourses()
    {
        return self::all();
    }
}
