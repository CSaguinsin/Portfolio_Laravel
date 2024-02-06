<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="{{ asset('css/Styles.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
    <title>Portfolio_Laravel</title>
</head>
<body>
    
{{-- navbar --}}
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto ">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="../assets/LOGO.png" class="w-30 h-40" alt="Flowbite Logo" />
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="/projects" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
{{-- end of navbar --}}

<div>
    <div class="relative h-full w-full flex items-center justify-center pt-10">
    <button class="profile_item w-[200px] h-[200px] p-1 border-2 rounded-full hover:border-gray-400/50 cursor-pointer transition-all duration-500 z-0">
        <div class="w-full h-full flex items-center justify-center p-2 rounded-full active:scale-95 hover:scale-95 object-cover transition-all duration-500">
            <img
            src="../assets/Me.jpg"
            alt="Profile Image"
            class="w-full h-full rounded-full object-cover"
            />
        </div>
        </button>
        
    </div>
    <div>
<h1 class='FirstTitle'>Hey There!👏🏻</h1>
<p class='paragph flex items-center justify-center'>  I am Carl Saginsin, a Web Developer from Manila, Philippines</p>
<div class="flex items-center justify-center">
    <a href='https://github.com/CSaguinsin' target="_blank">
        <img src="../assets/github.png" class="w-10 h-10 mx-1" alt="logo" />
    </a>
    <a href='https://www.instagram.com/carl_sgnsn/' target='_blank'>
        <img src="../assets/instagram.png" class="w-10 h-10 mx-1" alt="logo" />
    </a>
    <a href='https://www.tiktok.com/@carl_sgnsn' target='_blank'>
        <img src="../assets/tiktok.png" class="w-10 h-10 mx-1" alt="logo" />
    </a>
    <a href='https://www.facebook.com/carlsaginsin/' target='_blank'>
        <img src="../assets/facebook.png" class="w-10 h-10 mx-1" alt="logo" />
    </a>
    <a href='https://www.threads.net/@carl_sgnsn' target='_blank'>
        <img src="../assets/threads.png" class="w-10 h-10 mx-1" alt="logo" />
    </a>
</div>
</div>

<p class='pt-10 flex items-center justify-center paragph' >My Tech Stack</p>
<div class="flex items-center justify-center pt-2">               
    <img src="../assets/html.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/css.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/bootstrap.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/tailwind.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/javascript.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/react.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/jquery.png" class="w-10 h-10 mx-3" alt="logo" />
</div>
<div class="flex items-center justify-center pt-5">
    <img src="../assets/node.png" class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/firebase.png"class="w-10 h-10 mx-3" alt="logo" />
    <img src="../assets/mysql.png" class="w-10 h-10 mx-3" alt="logo" />

</div>
</div>
<div>         
</div>

{{-- about --}}
<div class="container px-6 py-12 mx-auto flex flex-col lg:flex-row items-center  lg:items-start pt-40">
    <div class="lg:w-1/2 lg:pr-6">
        <h1 class="text-3xl lg:text-4xl font-bold mb-4">ABOUT 👏🏻</h1>
        <p class='mb-4 paragph'>
        I am Carl Saginsin, a Full Stack Web Developer diving deep into the world of technology. My toolbox includes HTML, CSS, and JavaScript as my foundational languages. I craft sleek and responsive designs using Bootstrap or TailwindCSS, while jQuery adds that extra touch of interactivity. My love for building user interfaces extends to React.js, where I create dynamic and engaging web applications. When it comes to the backend, I rely on the power of Node.js and Firebase for seamless functionality and real-time updates. Additionally, I wield MySQL for efficient database management, ensuring robust and scalable solutions. I thrive on challenges and love transforming ideas into code. Let's connect and craft something amazing together!
        </p>
        <p class='mb-4 paragph'>
        📧 Open for works!: saguinsincarl8@gmail.com
        </p>
        <p class='mb-4 paragph'>
        📱 Give me a call: +639156716478
        </p>
    </div>
    <div class="lg:w-1/2 lg:pl-6">
        <img src="../assets/Me2.jpg" class="w-80 h-50 lg:h-full rounded-lg" alt="Carl's Photo" />
    </div>
{{-- end of about --}}
  </body>
</html>