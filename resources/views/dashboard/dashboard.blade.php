@extends('template.dashboard')

@section('content')
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    <!--start: header-->
    <header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-lg dark:bg-boxdark dark:drop-shadow-none">
        <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11">
            <div class="hidden sm:block">
                <h1 class="font-medium text-2xl">Welcome back, {{ auth()->user()->username ?? 'User' }}</h1>
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
                            <span class="block text-xs font-medium">UX Designer</span>
                        </span>
                        <span class="h-12 w-12 rounded border-2">
                            <img src="img/profile.jpg" alt="user photo profile">
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
            <div class="mt-4 grid grid-cols-12 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-5 2xl:gap-7.55">
                <!--card 1-->
                <div class="h-56 col-span-1 xl:col-span-3 rounded-sm border border-stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                </div>
                <!--card 1-->
                <!--card 2-->
                <div class="xl:col-span-2 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div>
                    </div>
                </div>
                <!--card 2-->
            </div>
            <div class="mt-4 md:grid-cols-2 md:gap-6 xl:grid-cols-5 2xl:gap-7.55">
                <!--start: my path-->
                <div class="h-80 rounded-sm border rounded-md stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <!--start: tab menu area-->
                    <!--end: tab menu area-->
                    <!--start: table content-->
                    <div class="">
                    </div>
                    <!--send: table content-->
                </div>
                <!--end: my path-->
            </div>
            <!--end: card container-->
        </div>
    </main>
    <!--end: main-->
</div>
@endsection
