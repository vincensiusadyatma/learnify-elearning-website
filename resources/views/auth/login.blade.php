<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Learnify</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background-image: url('img/landing-image.png');
            background-size: cover;
            background-position: center;
        }
        
       
        .bg-card {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px); 
        }

      
        .text-light {
            color: white;
        }

    </style>
</head>
<body class="bg-custom">
    
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 text-light">
                <img class="w-10 h-10 mr-2" src="img/logo.png" alt="logo">
                Learnify   
            </a>
            <div class="w-full bg-card rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-light">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('handle-login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 text-light">Your username</label>
                            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 text-light">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  {{-- <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 text-light" required=""> --}}
                                </div>
                                <div class="ml-3 text-sm">
                                  {{-- <label for="remember" class="text-gray-500 text-light">Remember me</label> --}}
                                </div>
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline text-light">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 bg-blue-700">Sign in</button>
                        <p class="text-sm font-light text-gray-500 text-light">
                            Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline text-light">Sign up</a>
                        </p>
                        <p class="text-sm font-light text-gray-500 text-light">
                            <a href="/" class="font-medium text-primary-600 hover:underline text-light">Back</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>
