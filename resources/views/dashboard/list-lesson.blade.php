@extends('template.dashboard')

@section('content')
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

        <!--start: main-->
        <main>
            <div class="mx-auto max-w-screen-3xl">
                <!--start: card container-->
                <div class="h-full flex justify-center">
                    <div class="w-full h-96 bg-black flex justify-center flex-col items-center">
                        <div class="text-white px-6">
                            <div class="w-full flex justify-center pb-10">
                                <h1 class="font-bold text-6xl">{{ $course->course_name }}</h1>
                            </div>
                            <p class="pb-10">
                              {{ $course->description }}
                            </p>
                        </div>
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
                    </div>
                </div>
                <!--end: card container-->


                <!--start: list course-->
                <div class="w-full h-full flex justify-center p-10">
                    <div class="grid grid-rows-1 gap-4">

                        @if($lessons->isEmpty())
                        <p>Belum ada materi yang tersedia.</p>
                    @else
                        @foreach ($lessons as $lesson)
                            <a href="{{ route('courses.lessons.show', ['course' => $course->id, 'lesson' => $lesson->id]) }}">
                                <div class="flex flex-col justify-center items-center h-56 w-[700px] bg-white border border-blue-200 rounded-xl p-6 shadow-md transition duration-200 hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                                    <div class="mb-2">
                                        <div>
                                            <span class="text-lg font-bold">{{ $lesson->title }}</span>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 mb-4">{{ $lesson->description }}</p>
                                    <div class="flex items-center justify-between">
                                        <div class="text-gray-500 text-sm">87K already learning</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                    
                    </div>
                </div>
                <!--end: list course-->
            </div>
        </main>
        <!--end: main-->
    </div>
@endsection
