<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
       
    @include('component.navbar')

   
        @yield('content')
   

    @include('component.footer')

</body>
</html>