<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learnify</title>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
       
    @include('component.navbar')

   
        @yield('content')
   

    @include('component.footer')

<script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>