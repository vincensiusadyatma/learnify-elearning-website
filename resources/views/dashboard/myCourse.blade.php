@extends('template.dashboard')

@section('content')
    <div class="px-20 py-20 w-full h-full flex flex-col">
        <h1 class="font-bold text-3xl py-4">My Courses</h1>
        <!-- Call to Action Button -->
        <div class="flex justify-end mb-4 px-10">
            <a href="/dashboard/course"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition duration-150">
                Explore New Courses
            </a>
        </div>

        <!-- Categories Section -->
        <div class="mb-8 px-10">
            <h2 class="text-2xl font-semibold mb-4">Course Categories</h2>
            <div class="flex space-x-4">
                <span class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full cursor-pointer hover:bg-gray-300">All</span>
                <span
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full cursor-pointer hover:bg-gray-300">Development</span>
                <span
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full cursor-pointer hover:bg-gray-300">Design</span>
                <span
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full cursor-pointer hover:bg-gray-300">Marketing</span>

            </div>
        </div>
        {{-- 
        <!-- Recommendations Section -->
        <div class="mb-8 px-10">
            <h2 class="text-2xl font-semibold mb-4">Recommendations</h2>
            <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4">
                <ul class="space-y-3">
                    <li class="flex items-center space-x-3">
                        <span class="block w-2.5 h-2.5 bg-blue-500 rounded-full"></span>
                        <span class="text-gray-700 dark:text-gray-400">Recommended course "Introduction to Web Development" based on your recent activity</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="block w-2.5 h-2.5 bg-blue-500 rounded-full"></span>
                        <span class="text-gray-700 dark:text-gray-400">Recommended course "User Interface Design Fundamentals" based on your interest in design</span>
                    </li>
                    <!-- Add more recommendations based on user's interests and activity -->
                </ul>
            </div>
        </div> --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
            @if ($courses && $courses->isNotEmpty())
                @foreach ($courses as $course)
                    <div
                        class="my-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition duration-200 hover:-translate-y-3 hover:shadow-xl">
                        <div class="pt-7 pb-7 flex justify-center items-center">
                            <img src="{{ $course->img_path }}" alt="{{ $course->course_name }}" class="w-40 h-40">
                        </div>
                        <div class="p-5 flex flex-col justify-center items-center">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $course->course_name }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $course->short_description }}
                            </p>
                            <a href="{{ route('courses.lessons', $course->id) }}" class="block w-full text-center py-2 px-4 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-200 mt-4">View Lessons</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-1 md:col-span-3 text-center">
                    <p class="text-xl font-medium text-gray-700 dark:text-gray-400">Anda belum mengambil course apapun.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
