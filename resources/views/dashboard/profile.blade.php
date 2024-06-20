@extends('template.dashboard')

@section('content')
<!--start: content area-->
<div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">

    <!--start: main-->
    <main class="px-4 md:px-6 2xl:px-11 py-8">
        <div class="mx-auto max-w-screen-3xl">
            <!--start: card container-->
            <div class="bg-white rounded-lg shadow-xl mt-20">
                
                <div class="flex justify-center items-center -mt-16">
                    <div class="w-32 h-32 overflow-hidden bg-white rounded-full shadow-xl">
                        <img class="w-full h-full object-cover" src="/img/profile/profile1.png" alt="user profile">
                    </div>
                </div>
                <div class="text-center px-6 py-4">
                    <h2 class="text-gray-800 text-3xl font-bold"> {{ auth()->user()->username }}</h2>
                    <p class="mt-2 text-gray-600 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
                
            </div>
            <!--end: card container-->

            <!-- Additional Info Section -->
            <div class="mt-8">
                <div class="bg-white rounded-lg shadow-xl p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">Additional Info</h2>
                        <a href="#" class="text-blue-600 hover:underline">Change Password</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-600">Phone Number:</p>
                            <p class="text-lg font-medium text-gray-800">{{ auth()->user()->phone_number }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">Email:</p>
                            <p class="text-lg font-medium text-gray-800">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Courses Section -->
            <div class="mt-8">
                <div class="bg-white rounded-lg shadow-xl p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">My Courses</h2>
                    <div>
                        <ul class="list-disc list-inside">
                            <li>Course 1</li>
                            <li>Course 2</li>
                            <li>Course 3</li>
                            <!-- Add more courses dynamically if needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end: main-->
</div>
<!--end: content area-->
@endsection
