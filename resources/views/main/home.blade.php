@extends('template.main')

@section('content')
<div class="relative h-screen bg-cover bg-center" style="background-image: url('img/landing-image.png');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 flex items-center justify-center h-full">
        <div class="text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Welcome to Our Website</h1>
            <p class="text-lg mb-8">Your success is our commitment</p>
            <a href="#about" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Learn More</a>
        </div>
    </div>
</div>
@endsection