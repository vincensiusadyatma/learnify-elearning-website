<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                 'course_name'=> 'Java Programming',
                 'course_category' => "Basic Programming",
                 'description'   => 'This course provides an introduction to Java programming, covering fundamental concepts such as variables, control structures, object-oriented programming, and basic data structures. Students will learn to write, compile, and execute Java programs, and develop problem-solving skills essential for software development. Ideal for beginners, this course lays the groundwork for advanced programming techniques and applications.',  
                 'img_path' => "/img/course/java-logo.svg" 
            ],
            [
                'course_name'=> 'Python Programming',
                'course_category' => "Basic Programming",
                'description'   => 'This course provides an introduction to Java programming, covering fundamental concepts such as variables, control structures, object-oriented programming, and basic data structures. Students will learn to write, compile, and execute Java programs, and develop problem-solving skills essential for software development. Ideal for beginners, this course lays the groundwork for advanced programming techniques and applications.',   
                'img_path' => "/img/course/java-logo.svg" 
           ],   
           [
            'course_name'=> 'Javascript Programming',
            'course_category' => "Basic Programming",
            'description'   => 'This course provides an introduction to Java programming, covering fundamental concepts such as variables, control structures, object-oriented programming, and basic data structures. Students will learn to write, compile, and execute Java programs, and develop problem-solving skills essential for software development. Ideal for beginners, this course lays the groundwork for advanced programming techniques and applications.',   
            'img_path' => "/img/course/java-logo.svg" 
            ],
            [
                'course_name'=> 'PHP Programming',
                'course_category' => "Basic Programming",
                'description'   => 'This course provides an introduction to Java programming, covering fundamental concepts such as variables, control structures, object-oriented programming, and basic data structures. Students will learn to write, compile, and execute Java programs, and develop problem-solving skills essential for software development. Ideal for beginners, this course lays the groundwork for advanced programming techniques and applications.',  
                'img_path' => "/img/course/java-logo.svg"  
           ],
           [
            'course_name'=> 'HTML Basic',
            'course_category' => "Web Programming",
            'description'   => 'This course provides an introduction to Java programming, covering fundamental concepts such as variables, control structures, object-oriented programming, and basic data structures. Students will learn to write, compile, and execute Java programs, and develop problem-solving skills essential for software development. Ideal for beginners, this course lays the groundwork for advanced programming techniques and applications.',   
            'img_path' => "/img/course/java-logo.svg" 
       ],
            
          
         ]);
    }
}
