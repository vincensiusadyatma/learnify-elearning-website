@extends('template.dashboard')

@section('content')
    <!--start: content area-->
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!--start: header-->
        <header class="sticky top-0 z-20 flex w-full bg-white drop-shadow-lg dark:bg-boxdark dark:drop-shadow-none">
            <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                <div class="hidden sm:block">
                    <h1 class="font-medium text-2xl">Welcome back, Nate</h1>
                </div>

                <div class="flex items-center gap-3 2xsm:gap-7">
                    <ul class="flex items-center 2xsm:gap-4">
                        <!--bell icon area-->
                        <li></li>
                    </ul>
                    <!--user area-->
                    <div class="relative">
                        <a class="flex items-center gap-4" href="/dashboard/profile">
                            <span class="hidden text-right lg:block">
                                <span class="block text-sm font-medium text-black dark:text-white">Nate</span>
                                <span class="block text-xs font-medium">UX Designer</span>
                            </span>

                            <span class="h-12 w-12 rounded">
                                <img src="/img/profile/profile1.png" alt="user photo profile">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!--end: header-->

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
                                <div class="pt-7 pb-7 flex justify-center items-center">
                                    <img src="{{ $course->img_path }}" alt="java image" class="w-40 h-40">
                                </div>

                                <div class="p-5 flex flex-col justify-center items-center">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $course->course_name }}</h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{  $course->description}}</p>
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
