@extends('template.course-view')

@section('content')
<div class="flex justify-center items-center h-screen">
    <div class="max-w-screen-3xl mx-auto"> 
        <div class="w-full sm:w-3/4 bg-white shadow-lg rounded-lg">
            <div class="p-6">
                <div class="mb-5 text-center">
                    <h1 class="font-bold text-3xl">{{ $lesson->title }}</h1>
                </div>
                <p class="mb-5">{{ $lesson->lesson_content }}</p>
                @if($previousLesson)
                <a href="{{ route('courses.lessons.show', ['course' => $course->id, 'lesson' => $previousLesson->id]) }}"
                    class="w-1/2 flex items-center justify-center text-white bg-green-700 p-3 border-2 rounded-xl hover:bg-green-900 hover:shadow-md transition duration-200">
                    <svg class="mr-2 w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    <span>Previous</span>
                </a>
                @endif

                @if($nextLesson)
                <a href="{{ route('courses.lessons.show', ['course' => $course->id, 'lesson' => $nextLesson->id]) }}"
                    class="w-1/2 flex items-center justify-center text-white bg-green-700 p-3 border-2 rounded-xl hover:bg-green-900 hover:shadow-md transition duration-200">
                    <span>Next</span>
                    <svg class="ml-2 w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </a>
                @endif
            </div>

          
        </div>
    </div>
</div>
@endsection
