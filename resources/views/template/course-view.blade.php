<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learnify</title>
</head>
<body class="flex h-screen">
    @include('component.header-course')

    <div class="flex-grow ml-72">
        @yield('content')
    </div>

    <x-notify::notify />
    @notifyJs
</body>
</html>
