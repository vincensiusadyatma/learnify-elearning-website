    <div class="flex h-screen overflow-hidden">
        <!--start: content area-->
        <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
            <!--start: header-->
            <header class="sticky top-0 z-20 flex w-full bg-white drop-shadow-lg dark:bg-boxdark dark:drop-shadow-none">
                <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
                    <div class="hidden sm:block cursor-pointer">
                        <a href="/dashboard/courses/{{ $course->id }}/lessons"
                            class="w-full flex items-center justify-center text-white bg-gray-900 p-3 border-2 rounded-xl hover:bg-gray-700 hover:shadow-md transition duration-200">
                            <svg class="mr-1 w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                            Back to course
                        </a>
                    </div>

                    <div class=" items-center grid grid-rows-2 justify-center">
                        <div class="flex justify-center items-center">
                            <h5 clas="font-thin text-lg">{{ $course->course_name }}</h5>
                        </div>
                        <h2 class="font-medium text-2xl">{{ $lesson->title }}</h2>
                    </div>

                    <div class="flex items-center gap-3 2xsm:gap-7">
                        <ul class="flex items-center 2xsm:gap-4">
                        </ul>

                        
                       
                    </div>
                </div>
            </header>
            <!--end: header-->

            <!--start: main-->
            <main>
