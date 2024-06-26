<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learnify</title>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-800">
       
    @include('component.navbar')

   
        @yield('content')
   
    
    @include('component.footer')

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <x-notify::notify />
    @notifyJs

</body>
</html>