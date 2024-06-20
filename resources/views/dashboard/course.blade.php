@extends('template.dashboard')

@section('content')
    <!--start: content area-->
<!--Start: Jumbotron-->
    <div class="w-full  bg-gray-800   p-8 md:p-12 mb-8">
        <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
            </svg>
            Tutorial
        </a>
        <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Course List</h1>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools that even influence both web designers and developers.</p>
        <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Read more
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

<!--End: Jumbotron-->


        <!--start: main-->
        <main class="">
            <!--Start: Dashboard content-->
            <div class="px-20 py-20 w-full h-full flex flex-col">
                <div class="flex flex-col justify-start w-full px-10">
                    <h1 class="font-bold text-3xl py-4">Course</h1>
                    <p class="font-thin text-xl">Explore all you need to acquire new skills.</p>
                </div>

                <!--Start: card container-->
                <div class="py-10">
                    <!--Start: cards content-->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">
                        <!--Start: card 1-->
                        @foreach ($courses as $course)
                            <div
                                class="my-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 transition duration-200 hover:-translate-y-3 hover:shadow-xl">
                                <a href="#" class="mx-2 my-2 bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                                    </svg>
                                    {{ $course->course_category }}
                                </a>
                                <div class="pt-7 pb-7 flex justify-center items-center">
                                    <img src="{{ $course->img_path }}" alt="java image" class="w-40 h-40">
                                </div>

                                <div class="p-5 flex flex-col justify-center items-center">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $course->course_name }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{  $course->short_description}}</p>
                                    <a href="#"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read
                                        more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <!--End: cards content-->
                </div>
                <!--End: card container-->
            </div>
            <!--End: Dashboard content-->
        </main>
        <!--end: main-->
    </div>
@endsection
