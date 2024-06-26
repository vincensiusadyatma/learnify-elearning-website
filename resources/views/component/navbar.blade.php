<nav id="navbar" class="navbar-transition fixed w-full z-50 top-0 start-0 bg-transparent text-white">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="img/logo.png" class="h-12 w-auto" alt="Flowbite Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap">Learnify</span>
      </a>
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        @guest

        <a href="{{ route('login') }}" class="btn-login bg-white text-gray-900 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center md:mr-[4%] lg:block">Login</a>
        <a href="{{ route('register') }}" class="btn-login bg-white text-gray-900 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center sm:hidden lg:block">Register</a>
       
        @else
        {{-- Jika ada pengguna yang masuk --}}
        <img src="img/profile/profile1.png" id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="/docs/images/people/profile-picture-5.jpg" alt="User dropdown">

        <!-- Dropdown menu -->
        <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                <div>{{ auth()->user()->username ?? 'User' }}</div>
                <div class="font-medium truncate">{{ auth()->user()->email ?? 'User' }}</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                <li>
                    @if (auth()->user()->role->name == "user")
                    <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    @else
                    <a href="/admin/dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    @endif
              
                
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
            </ul>
            <div class="py-1">
                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
            </div>
            </div>
        @endguest

        
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
      </div>
      
      @guest
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:pl-[3%] mx-auto " id="navbar-sticky">
      @else   
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 md:pl-[3%] mx-auto md:px-24" id="navbar-sticky">
    @endguest

        <ul id="card-nav-sticky" class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-semi-purple  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
            <li>
              <a href="#" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-gray-700 md:p-3 sm:hover:text-blue-950 md:hover:text-white text-white transition duration-300 ease-in-out">Home</a>
            </li>
              <li>
                  <a href="#about" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-gray-700 md:p-3 sm:hover:text-blue-950 md:hover:text-white text-white transition duration-300 ease-in-out">About</a>
              </li>
              <li>
                  <a href="#learning-path" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-gray-700 md:p-3 text-white  sm:hover:text-blue-950  md:hover:text-white transition duration-300 ease-in-out ">Learning Path</a>
              </li>
              <li>
                  <a href="#question" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-gray-700 md:p-3 text-white  sm:hover:text-blue-950 md:hover:text-white  transition duration-300 ease-in-out">Question</a>
              </li>
          </ul>
      </div>
  </div>
</nav>
