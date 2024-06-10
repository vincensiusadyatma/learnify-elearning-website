<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Learnify</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background: linear-gradient(0deg, rgba(23,23,78,1) 0%, rgba(33,33,99,1) 100%);
        }
        .or-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 83.333333%; /* 5/6 width */
            margin: 0 auto;
        }
        .or-container hr {
            flex: 1;
            border: none;
            height: 1px;
            background-color: #e2e8f0;
        }
        .or-container span {
            margin: 0 10px;
            color: #000000;
        }
    </style>
</head>
<body class="bg-custom">
    <div class="flex flex-col min-h-screen">
        <div class="flex flex-col mx-auto w-full max-w-md mt-20 bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-800">Welcome back to <span class="text-red-500">Learnify</span></h1>
            </div>
            <form action="" class="text-center flex flex-col gap-4">
                <div class="mb-1 w-full flex flex-col items-center">
                    <input type="email" id="email" name="email" class="form-input w-5/6 mt-1 border rounded-md shadow-sm py-2 px-4 bg-gray-200 text-gray-700 border-black" placeholder="Email address" required autofocus>
                </div>
                <div class="mb-1 w-full flex flex-col items-center">
                    <input type="password" id="password" name="password" class="form-input w-5/6 mt-1 border rounded-md shadow-sm py-2 px-4 bg-gray-200 text-gray-700 border-black" placeholder="Password" required>
                </div>
                <div class="mb-0 w-5/6 flex justify-end">
                    <a href="#" class="text-sm text-red-500 hover:text-red-700">Forgot your password?</a>
                </div>
                <div class="text-left mb-0 w-5/6 flex items-center">
                    <input type="checkbox" id="remember_me" name="remember" class="text-gray-400 mr-2">
                    <label for="remember_me" class="text-gray-700">Remember this account</label>
                </div>
                <div class="text-center mb-4">
                    <button type="submit" class="w-5/6 bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-md shadow-sm">Sign In</button>
                </div>
            </form>
            <div class="text-center mt-2 or-container">
                <hr>
                <span>or sign in with</span>
                <hr>
            </div>
            <div class="text-center mt-2">
                <a href="#" class="inline-block w-5/6 text-center px-4 py-2 rounded-md bg-white text-black hover:bg-gray-100 border border-black mt-2">Google</a>
            </div>
        </div>
    </div>
</body>
</html>
