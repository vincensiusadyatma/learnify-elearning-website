@extends('template.profile')

@section('content')
<!--start: content area-->
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    <!--start: header-->
    <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-lg dark:bg-boxdark dark:drop-shadow-none">
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
                            <span class="block text-xs font-medium">UX Designer</span>
                        </span>
                        <span class="h-12 w-12 rounded border-2">
                            <img src="/img/profile.jpg" alt="user photo profile">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!--end: header-->
    <!--start: main-->
    <main class="">
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <!--start: card container-->
            <div class="grid grid-rows-3 gap-6">
                <!--card 1-->
                <div class="h-full xl:col-span-3 rounded-lg border border-stroke-black bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="grid grid-rows-2">
                        <!--card 1: header-->
                        <div class="h-40 bg-blue-200">
                        </div>
                        <!--card 1: content-->
                        <div class="h-40 bg-red-200">
                        </div>
                    </div>
                </div>
                <!--card 2-->
                <div class="h-full xl:col-span-3 rounded-lg border border-stroke-black bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="h-20 border flex items-center gap-4 p-6">
                        <h1 class="text-2xl font-bold">About Me</h1>
                        <button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:outline-none font-medium rounded-full text-center px-2.5 py-0.75">edit</button>
                    </div>
                    <p class="p-5 mb-3 text-gray-500 dark:text-gray-400">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                </div>
                <!--card 3-->
                <div class="h-full xl:col-span-3 rounded-lg border border-stroke-black bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="h-20 border flex items-center gap-4 p-6">
                        <h1 class="text-2xl font-bold">About Me</h1>
                        <button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:outline-none font-medium rounded-full text-center px-2.5 py-0.75">edit</button>
                    </div>
                    <p class="p-5 mb-3 text-gray-500 dark:text-gray-400">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                </div>
            </div>
            <!--end: card container-->
        </div>
    </main>
    <!--end: main-->
</div>
<!--end: content area-->
@endsection
