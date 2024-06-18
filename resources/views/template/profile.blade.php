<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex h-screen bg-slate-200">

    <!--start: sidebar-->
    <aside : class='left-0 top-0 z-9999 flex h-[100%] w-72 flex-col bg-blue-200 duration-300 ease-linear bg-gray-900'>
        @include('component.sidebar')
    </aside>
    <!--end: sidebar-->

    <div class="flex-grow">
        @yield('content')
    </div>
</body>
</html>
