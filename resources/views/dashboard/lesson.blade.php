@extends('template.dashboard')

@section('content')
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
                        <a class="flex items-center gap-4" href="profile.html">
                            <span class="hidden text-right lg:block">
                                <span class="block text-sm font-medium text-black dark:text-white">Nate</span>
                                <span class="block text-xs font-medium">UX Desinger</span>
                            </span>

                            <span class="h-12 w-12 rounded border-2">
                                <img src="src/css/profile.jpg" alt="user photo profile">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!--end: header-->

        <!--start: main-->
        <main>
            <div class="mx-auto max-w-screen-3xl">
                <!--start: card container-->
                <div class="h-full flex justify-center">
                    <div class="w-full h-96 bg-black flex justify-center flex-col items-center">
                        <div class="text-white px-6">
                            <div class="w-full flex justify-center pb-10">
                                <h1 class="font-bold text-6xl">Java</h1>
                            </div>
                            <p class="pb-10">
                                Welcome to our Java Programming Skill Track, a tool tailored for all proficiency
                                levels, from novice to expert. It gauges your Java skills through practical,
                                real-world coding challenges based on a structured competency model. This model
                                evaluates your proficiency against essential skill sets for each Java expertise
                                level. As you solve our problems, you're not just showcasing your abilities but also
                                reinforcing and broadening your Java knowledge. Achieve mastery over the required
                                competencies, and you'll be awarded a corresponding level of certification. This
                                accreditation marks your progress and expertise in Java. Engage with us to both
                                reflect and enhance your Java development journey.
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
                        <div
                            class="flex flex-col justify-center items-center h-56 w-[700px] bg-white border border-blue-200 rounded-xl p-6 shadow-md transition duration-200 hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                            <div class="mb-2">
                                <div>
                                    <span class="text-lg font-bold">Introduction to Java</span>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-4">Understand the language behind millions of apps. Grasp
                                core concepts, write basic programs, and make your first step toward breaking into
                                tech.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-gray-500 text-sm">87K already learning</div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-center items-center h-56 w-[700px] bg-white border border-blue-200 rounded-xl p-6 shadow-md transition duration-200 hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                            <div class="mb-2">
                                <div>
                                    <span class="text-lg font-bold">Introduction to Java</span>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-4">Understand the language behind millions of apps. Grasp
                                core concepts, write basic programs, and make your first step toward breaking into
                                tech.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-gray-500 text-sm">87K already learning</div>
                            </div>
                        </div>

                        <div
                            class="flex flex-col justify-center items-center h-56 w-[700px] bg-white border border-blue-200 rounded-xl p-6 shadow-md transition duration-200 hover:-translate-y-1 hover:shadow-xl cursor-pointer">
                            <div class="mb-2">
                                <div>
                                    <span class="text-lg font-bold">Introduction to Java</span>
                                </div>
                            </div>
                            <p class="text-gray-700 mb-4">Understand the language behind millions of apps. Grasp
                                core concepts, write basic programs, and make your first step toward breaking into
                                tech.</p>
                            <div class="flex items-center justify-between">
                                <div class="text-gray-500 text-sm">87K already learning</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: list course-->
            </div>
        </main>
        <!--end: main-->
    </div>
@endsection
