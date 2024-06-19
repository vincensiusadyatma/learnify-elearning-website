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
                        <a class="flex items-center gap-4" href="#">
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
        <main class="">
            <div class="mx-auto max-w-screen-3xl">
                <!--start: card container-->
                <div class="h-full bg-white">
                    <div class="h-full">
                        <div class=" h-32 overflow-hidden">
                            <img class="w-full" src="src\css\bg-profile.jpg" alt="bg user profile" />
                        </div>
                        <div class="flex justify-center px-5 -mt-12">
                            <img class="h-32 w-32 bg-white p-2 rounded-full   " src="src\css\profile-2.jpg"
                                alt="user profile" />

                        </div>
                        <div class="">
                            <div class="text-center px-14">
                                <h2 class="text-gray-800 text-3xl font-bold">Nicolaus Reva S</h2>
                                <p class="mt-2 text-gray-500 text-sm pb-5">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, </p>
                            </div>
                        </div>

                        <div class="w-full h-96 bg-black">
                        </div>
                    </div>
                </div>
                <!--end: card container-->

            </div>
        </main>
        <!--end: main-->
    </div>
    <!--end: content area-->
@endsection
