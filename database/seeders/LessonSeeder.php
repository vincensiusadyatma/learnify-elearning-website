<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lessons')->insert([
            [
               'course_id' => 1,
                'title' => 'Introduction to Java',
                'lesson_content' => "Java is a high-level programming language originally developed by 
                Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows,
                 Mac OS, and the various versions of UNIX.\n\nJava is a widely-used language that is designed 
                 to have as few implementation dependencies as possible. It is a general-purpose programming 
                 language intended to let application developers write once, run anywhere (WORA), meaning that
                  compiled Java code can run on all platforms that support Java without the need for 
                  recompilation.\n\nJava applications are typically compiled to bytecode that can run on any 
                  Java virtual machine (JVM) regardless of the underlying computer architecture."
                  
            ],

            [
               'course_id' => 1,
                'title' => 'How to Print in Java',
                'lesson_content' => "In Java, you can print text and other data to the console using various methods provided by the `System` class. The most common method used for printing is `System.out.println()`.",
                
            ],
            [
                'course_id' => 1,
                 'title' => 'Variables in Java',
                 'lesson_content' => "Variables in Java are containers for storing data values. In Java, there are different types of variables, including primitive data types like int, double, boolean, etc., as well as reference data types like arrays, objects, and strings.",
             ],
             [
                'course_id' => 1,
                 'title' => 'Control Flow Statements in Java',
                 'lesson_content' => "Control flow statements in Java are used to control the flow of execution in a program. These statements include if-else, switch-case, while, do-while, and for loops.",
             ]
          
         ]);
    }
}
