@extends('template.dashboard')

@section('content')
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <!--start: header-->
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
                                <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Start
                                    a Skill Track</button>
                                <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">Start
                                    a Career Track</button>
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
                            <div class="w-1/2 h-full flex flex-col items-center justify-center border-r border-black-200">
                                <div class="flex justify-center items-center mb-2">
                                    <h2 class="font-medium text-3xl">1000</h2>
                                </div>

                                <div class="flex justify-end">
                                    <h2 class="font-thin text-xl">Today</h2>
                                </div>
                            </div>
                            <div class="w-1/2 h-full flex flex-col items-center justify-center border-r border-black-200">
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

            <div class="mt-4 md:grid-cols-2 md:gap-6 xl:grid-cols-5 2xl:gap-7.55">

                <!--start: my path-->
                <div
                    class="h-80 rounded-sm border rounded-md stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                    <!--start: tab menu area-->

                    <!--
                                <div class="">
                                    <ul class="flex flex-row">
                                        <li class="pr-6">
                                            <h2 class="text-lg font-medium mb-4">
                                                <a href="">My tracks</a>
                                            </h2>
                                        </li>
                                        <li>
                                            <h2 class="text-lg font-medium mb-4">
                                                <a href="">My Course</a>
                                            </h2>
                                        </li>
                                    </ul>
                                </div>
                                -->

                    <!--end: tab menu area-->

                    <!--start: table content-->
                    <div class="">

                    </div>
                    <!--end: table content-->
                </div>
                <!--end: my path-->
            </div>
            <!--end: card container-->

        </div>
        </main>
        <!--end: main-->
    </div>
@endsection
