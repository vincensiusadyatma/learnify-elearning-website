@extends('template.course-view')

@section('content')
    <div class="mx-auto max-w-screen-3xl p-6 flex justify-center items-center">
        <div class="w-3/4 h-full bg-white shadow-lg rounded-lg">
            <div class="w-full h-full p-6">
                <!--start: lesson content-->
                <!--start: content container-->
                <div class="">
                    <div class="flex flex-col justify-center items-center mb-5">
                        <h1 class="font-bold text-3xl">What is Java?</h1>
                        <img src="src\css\java-svgrepo-com.svg" class="w-[10%] h-auto" alt="ha??">
                    </div>
                    <p class="mb-5">Java is a popular programming language, created in 1995.<br>It is owned
                        by Oracle, and more than <b>3 Billion</b> devices run Java.</p>
                    <p class="mb-5">It is user for:</p>
                    <ul class="p-5 list-disc">
                        <li>Mobile Application (Specially Android apps)</li>
                        <li>Desktop applications</li>
                        <li>Web applications</li>
                        <li>Web servers and application servers</li>
                        <li>Games</li>
                        <li>database connection</li>
                        <li>And much, much more!!</li>
                    </ul>

                    <div class="flex justify-center items-center mb-5">
                        <h1 class="font-bold text-3xl">Why Use Java</h1>
                    </div>

                    <ul class="p-5 list-disc">
                        <li>Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
                        <li>It is one of the most popular programming languages in the world</li>
                        <li>It has a large demand in the current job market</li>
                        <li>It is easy to learn and simple to use</li>
                        <li>It is open-source and free</li>
                        <li>It is secure, fast and powerful</li>
                        <li>It has huge community support (tens of millions of developers)</li>
                        <li>Java is an object oriented language which gives a clear structure to programs
                            and allows code to be reused, lowering development costs</li>
                        <li>As Java is close to C++ and C#, it makes it easy for programmers to switch to
                            Java or vice versa</li>
                    </ul>
                </div>
                <!--end: content container-->
                <!--end: lesson content-->
            </div>

            <div class="w-full h-30 bg-white shadow-lg border-2 border-slate-300">
                <div class="flex flex-row justify-between items-center p-5">
                    <button type="button"
                        class="w-1/2 flex items-center justify-center text-white bg-green-700 p-3 border-2 rounded-xl hover:bg-green-900 hover:shadow-md transition duration-200">
                        <svg class="mr-1 w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        <span>Previous</span>
                    </button>

                    <button type="button"
                        class="w-1/2 flex items-center justify-center text-white bg-green-700 p-3 border-2 rounded-xl hover:bg-green-900 hover:shadow-md transition duration-200">
                        <span>Next</span>
                        <svg class="rotate-180 ml-1 w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </main>
    <!--end: main-->
    </div>
    <!--end: content area-->
    </div>
    <!--end: page wrapper-->
@endsection
