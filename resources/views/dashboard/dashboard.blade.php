@extends('template.dashboard')

@section('content')
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!--start: header-->
        <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-lg dark:bg-boxdark dark:drop-shadow-none">
            <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                <div class="hidden sm:block">
                    <h1 class="font-medium text-2xl">Welcome back,{{ auth()->user()->username ?? 'User' }}</h1>
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
                            </span>
                            <span class="h-12 w-12 rounded ">
                                <img src="img/profile/profile1.png" alt="user photo profile">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!--end: header-->
        <!--start: main-->
        <main>
            <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
                <!--start: card container-->
                <div class="mt-4 grid grid-cols-12 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-5 2xl:gap-7.55">
                    <!--card 1-->
                    <div
                        class="h-56 col-span-1 xl:col-span-3 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="w-full h-full flex flex-col">
                            <div class="border-b border-black-200 h-[30%] flex justify-center items-center">
                                <h1 class="font-medium text-2xl">Ongoing learning</h1>
                            </div>
                            <div class="bg-slate-100 h-[70%] flex flex-col justify-center items-center">
                                <p class="text-gray-500 mb-4">There is no ongoing learning.</p>
                                <div class="space-x-2">
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Start a Skill
                                        Track</button>
                                    <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Start a
                                        Career Track</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card 1-->
                    <!--card 2-->
                    <div
                        class="xl:col-span-2 rounded-sm border border-stroke bg-white px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="w-full h-full flex flex-col">
                            <div class="border-b border-black-200 h-[30%] flex justify-center items-center">
                                <h1 class="font-medium text-2xl">Points</h1>
                            </div>
                            <div class="bg-slate-100 h-[70%] flex space-x-2">
                                <div
                                    class="w-1/2 h-full flex flex-col items-center justify-center border-r border-black-200">
                                    <div class="flex justify-center items-center mb-2">
                                        <h2 class="font-medium text-3xl">1000</h2>
                                    </div>
                                    <div class="flex justify-end">
                                        <h2 class="font-thin text-xl">Today</h2>
                                    </div>
                                </div>
                                <div
                                    class="w-1/2 h-full flex flex-col items-center justify-center border-r border-black-200">
                                    <div class="flex justify-center items-center mb-2">
                                        <h2 class="font-medium text-3xl">1000</h2>
                                    </div>
                                    <div class="flex justify-end">
                                        <h2 class="font-thin text-xl">This week</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card 2-->
                </div>

                <!-- Text "My Latest Courses" -->
                <h2 class="mt-8 text-xl font-semibold text-gray-700 dark:text-gray-300">My Latest Courses</h2>

                <!-- List of courses -->
                <div class="mt-4 md:grid-cols-2 md:gap-6 xl:grid-cols-5 2xl:gap-7.55">
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 xl:grid-cols-3 2xl:gap-7.55">
                        @if ($courses->isEmpty())
                            <div class="col-span-3 text-center">
                                <p class="text-gray-500">Anda belum mengambil kursus.</p>
                            </div>
                        @else
                            <!-- Loop untuk setiap kursus -->
                            @foreach ($courses as $course)
                                <div
                                    class="rounded-sm border border-stroke bg-white shadow-lg hover:shadow-xl transition duration-300 ease-in-out dark:border-strokedark dark:bg-boxdark">
                                    <div class="w-full h-full flex flex-col">
                                        <div class="border-b border-black-200 h-[30%] flex justify-center items-center">
                                            <h1 class="font-medium text-2xl">{{ $course->course_name }}</h1>
                                        </div>
                                        <div class="bg-slate-100 h-[70%] flex flex-col justify-center items-center">
                                            <img src="{{ $course->img_path }}" alt="{{ $course->title }}"
                                                class="w-full mb-4 h-1/2">
                                            <p class="text-gray-500 mb-4 mx-5">{{ $course->short_description }}</p>
                                            <a href=""
                                                class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">View
                                                Course</a>
                                            {{-- <a href="{{ route('courses.show', $course->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">View Course</a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Akhir loop -->
                        @endif
                    </div>
                </div>
                <!--end: card container-->
            </div>
        </main>
        <!--end: main-->
    </div>
@endsection
