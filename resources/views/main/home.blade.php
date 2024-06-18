@extends('template.main')

@section('content')
{{-- first landing section jumbotron --}}
<div class="relative h-screen bg-cover bg-center" style="background-image: url('img/landing-image.png');">
  <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative z-10 flex items-center justify-center h-full">
      <div class="text-center text-white">
          <h1 class="text-4xl font-bold mb-4">Welcome to Learnify</h1>
          <p class="text-lg mb-8">Lets build yorself from here together</p>
          <a href="#about" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Learn More</a>
      </div>
  </div>
</div>
{{-- end landing section jumbotron --}}

{{-- 3 point advantage card --}}
<div class="workspace container mx-auto mt-[-50px] relative z-20 " data-aos="fade-up" data-aos-duration="500">
  <div class="flex justify-center ">
    <div class="w-full xs:w-[80%] ss:w-4/5 md:w-[90%] lg:w-auto flex justify-center ">
      <div class="flex flex-wrap text-white rounded-2xl shadow-lg xs:justify-center bg-semi-purple flex-no-wrap">
        <div class="w-full sm:w-1/2 ss:w-full md:w-1/3 lg:w-1/3 text-center p-4">
          <div class="flex items-center justify-between ">
            <img src="img/icons/free.png" class="mb-4 mx-auto mr-4 xs:w-1/3">
            <div class="text-left">
              <h5 class="text-lg font-bold">TERJANGKAU</h5>
              <p class="text-sm">Harga yang terjangkau</p>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 ss:w-full md:w-1/3 lg:w-1/3 text-center p-4">
          <div class="flex items-center justify-between ">
            <img src="img/icons/free.png" class="mb-4 mx-auto mr-4 xs:w-1/3">
            <div class="text-left">
              <h5 class="text-lg font-bold">TERPERCAYA</h5>
              <p class="text-sm">Pasti Dapat diandalkan</p>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 ss:w-full md:w-1/3 lg:w-1/3 text-center p-4">
          <div class="flex items-center justify-between ">
            <img src="img/icons/free.png" class="mb-4 mx-auto mr-4 xs:w-1/3">
            <div class="text-left">
              <h5 class="text-lg font-bold">24 JAM</h5>
              <p class="text-sm">Layanan Bantuan 24 jam</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- end 3 point advantage card --}}
<section class="bg-gray-800">
  <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
      <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
          <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
          <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
      </div>
      <div class="grid grid-cols-2 gap-4 mt-8">
          <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
          <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
      </div>
  </div>
</section>

<div class="bg-black">

  <section id="features"
      class="relative block px-6 py-10 md:py-20 md:px-10  border-t border-b border-neutral-900 bg-neutral-900/30">


      <div class="relative mx-auto max-w-5xl text-center">
          <span class="text-gray-400 my-3 flex items-center justify-center font-medium uppercase tracking-wider">
          Why choose us
          </span>
          <h2
              class="block w-full bg-gradient-to-b from-white to-gray-400 bg-clip-text font-bold text-transparent text-3xl sm:text-4xl">
              Build a Website That Your Customers Love
          </h2>
          <p
              class="mx-auto my-4 w-full max-w-xl bg-transparent text-center font-medium leading-relaxed tracking-wide text-gray-400">
              Our templates allow for maximum customization. No technical skills required – our intuitive design tools
              let
              you get the job done easily.
          </p>
      </div>


      <div class="relative mx-auto max-w-7xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
          <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
              <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                  style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-color-swatch" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M19 3h-4a2 2 0 0 0 -2 2v12a4 4 0 0 0 8 0v-12a2 2 0 0 0 -2 -2"></path>
                      <path d="M13 7.35l-2 -2a2 2 0 0 0 -2.828 0l-2.828 2.828a2 2 0 0 0 0 2.828l9 9"></path>
                      <path d="M7.3 13h-2.3a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h12"></path>
                      <line x1="17" y1="17" x2="17" y2="17.01"></line>
                  </svg>
              </div>
              <h3 class="mt-6 text-gray-400">Customizable</h3>
              <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">Tailor your landing page's
                  look
                  and feel, from the color scheme to the font size, to the design of the page.
              </p>
          </div>


          <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
              <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                  style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3"></polyline>
                  </svg>
              </div>
              <h3 class="mt-6 text-gray-400">Fast Performance</h3>
              <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">We build our templates for
                  speed in mind, for super-fast load times so your customers never waver.
              </p>
          </div>


          <div class="rounded-md border border-neutral-800 bg-neutral-900/50 p-8 text-center shadow">
              <div class="button-text mx-auto flex h-12 w-12 items-center justify-center rounded-md border "
                  style="background-image: linear-gradient(rgb(80, 70, 229) 0%, rgb(43, 49, 203) 100%); border-color: rgb(93, 79, 240);">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools" width="24"
                      height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4"></path>
                      <line x1="14.5" y1="5.5" x2="18.5" y2="9.5"></line>
                      <polyline points="12 8 7 3 3 7 8 12"></polyline>
                      <line x1="7" y1="8" x2="5.5" y2="9.5"></line>
                      <polyline points="16 12 21 17 17 21 12 16"></polyline>
                      <line x1="16" y1="17" x2="14.5" y2="18.5"></line>
                  </svg>
              </div>
              <h3 class="mt-6 text-gray-400">Fully Featured</h3>
              <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                  Everything you need to
                  succeed
                  and launch your landing page, right out of the box. No need to install anything else.
              </p>
          </div>


      </div>

      <div class="absolute bottom-0 left-0 z-0 h-1/3 w-full border-b"
          style="background-image: linear-gradient(to right top, rgba(79, 70, 229, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
      </div>
      <div class="absolute bottom-0 right-0 z-0 h-1/3 w-full"
          style="background-image: linear-gradient(to left top, rgba(220, 38, 38, 0.2) 0%, transparent 50%, transparent 100%); border-color: rgba(92, 79, 240, 0.2);">
      </div>

  </section>
</div>

{{-- learning path section --}}
<section id="learning-path">
  <div class="wrapper max-w-[1100px] w-full relative">
    <i id="left" class="fa-solid fa-angle-left top-1/2 h-[50px] w-[50px] cursor-pointer text-lg absolute text-center leading-[50px] bg-white rounded-full shadow-md transform -translate-y-1/2 transition-transform duration-100 left-[-22px] active:scale-85"></i>
    <ul class="carousel">
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-1.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">Blanche Pearson</h2>
        <span class="text-gray-500 text-[1.31rem]">Sales Manager</span>
      </li>
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-2.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">Joenas Brauers</h2>
        <span class="text-gray-500 text-[1.31rem]">Web Developer</span>
      </li>
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-3.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">Lariach French</h2>
        <span class="text-gray-500 text-[1.31rem]">Online Teacher</span>
      </li>
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-4.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">James Khosravi</h2>
        <span class="text-gray-500 text-[1.31rem]">Freelancer</span>
      </li>
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-5.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">Kristina Zasiadko</h2>
        <span class="text-gray-500 text-[1.31rem]">Bank Manager</span>
      </li>
      <li class="card flex flex-col items-center">
        <div class="img">
          <img src="images/img-6.jpg" alt="img" draggable="false">
        </div>
        <h2 class="font-medium text-[1.56rem] my-[30px]">Donald Horton</h2>
        <span class="text-gray-500 text-[1.31rem]">App Designer</span>
      </li>
    </ul>
    <i id="right" class="fa-solid fa-angle-right top-1/2 h-[50px] w-[50px] cursor-pointer text-lg absolute text-center leading-[50px] bg-white rounded-full shadow-md transform -translate-y-1/2 transition-transform duration-100 right-[-22px] active:scale-85"></i>
  </div>
</section>
{{-- akhir learning path section --}}

{{-- FAQ Section --}}
<section class="bg-gray-800 md:mt-[-2%] sm:mt-[-250px] ">
  <div class=" pt-20 mx-auto max-w-4xl px-4 " >
  <h2 class="text-2xl font-semibold mb-4 text-center text-white">FAQ</h2>

  <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
      <h2 id="accordion-flush-heading-1">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
          <span>What is Flowbite?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
          <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
          <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
        </div>
      </div>
      <h2 id="accordion-flush-heading-2">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
          <span>Is there a Figma file available?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
          <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
          <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
        </div>
      </div>
      <h2 id="accordion-flush-heading-3">
        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
          <span>What are the differences between Flowbite and Tailwind UI?</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </h2>
      <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
          <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
          <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
          <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
          <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
            <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End FAQ Section --}}
@endsection