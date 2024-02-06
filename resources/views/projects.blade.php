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
    <title>Projects</title>
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
            <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
{{-- end of navbar --}}

<div class="relative h-full w-full flex items-center justify-center pt-10">
    <div>
        <h1  class='FirstTitle'>PROJECTS</h1>
    </div>
</div>


<div>
    <div>
        <h1 class="secondTitle">Startup:</h1>
    </div>
{{-- buildmastershub --}}
        <div class="flex flex-wrap overflow-hidden">
            <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2">
                <img src="../assets/buildmastershub.png" alt="Build Masters Hub" class="rounded-lg h-full w-full object-cover" />
            </div>
            <div class="w-full overflow-hidden lg:w-1/2 xl:w-1/2">
                <div class="p-6">
                    <h2 class="FirstTitle" >BuildMastersHub</h2>
                            <div class="flex pt-5">
                                    <img src="../assets/react.png" class="w-10 h-10 mx-3" alt="logo" />
                                    <img src="../assets/tailwind.png" class="w-10 h-10 mx-3" alt="logo" />
                                    <img src="../assets/node.png" class="w-10 h-10 mx-3" alt="logo" />
                                    <img src="../assets/firebase.png" class="w-10 h-10 mx-3" alt="logo" />
                            </div>
                    <p class ='pt-4 paragph'>
                    BuildMasterHub is a project that aims to create a platform for construction and foremen to connect with potential clients, all in a user-friendly and searchable format.
BuildMasterHub aims to bridge the gap between talent and opportunity within the construction realm, fostering a collaborative ecosystem where craftsmanship meets demand. By leveraging technology to streamline the process of showcasing skills and networking, this platform aspires to redefine how professionals in the construction field interact, collaborate, and thrive in a competitive market.
This web app is created using the latest technologies React javascript and TailwindCSS and on the backend is Firebase
                    </p>
                    <div class=' relative flex items-center '>
                        <a href='https://buildmastershub.web.app/' target='_blank'>
                        <p class ='pt-4'>
                            <span class="paragph" >Live Website</span>
                        </p>
                        </a>
                    </div>
                </div>
            </div>
{{-- end --}}

{{-- a core --}}
<div>
    <h1 class="secondTitle">Freelance:</h1>
</div>
<div class="flex flex-wrap overflow-hidden">
    <div class="w-full overflow-hidden sm:w-1/2 lg:w-1/2 xl:w-1/2">
        <img src="../assets/acore.png" alt="Build Masters Hub" class="rounded-lg h-full w-full object-cover" />
    </div>
    <div class="w-full overflow-hidden lg:w-1/2 xl:w-1/2">
        <div class="p-6">
            <h2 class="FirstTitle" >A Core Lying In Web App</h2>
                    <div class="flex pt-5">
                            <img src="../assets/react.png" class="w-10 h-10 mx-3" alt="logo" />
                            <img src="../assets/tailwind.png" class="w-10 h-10 mx-3" alt="logo" />
                            <img src="../assets/node.png" class="w-10 h-10 mx-3" alt="logo" />
                            <img src="../assets/firebase.png" class="w-10 h-10 mx-3" alt="logo" />
                    </div>
            <p class ='pt-4 paragph'>
                About "A Core Lying In" Freelance Project 🚀 <br />

                Welcome to "A Core Lying In," a freelance project that revolves around the development of a robust full-stack web application. Leveraging the power of cutting-edge technologies such as Reactjs, TailwindCSS, Firebase, and Firestore, this project is designed to provide a seamless and efficient experience for users.
                <br />  
                🌐 Web App Overview: <br />
                "A Core Lying In" is a full-stack web application that facilitates essential functionalities, including creating, reading, updating, and deleting data. The project focuses on delivering a user-friendly interface and a smooth navigation experience.
            </p>
            <div class=' relative flex items-center '>
                <a href='https://buildmastershub.web.app/' target='_blank'>
                <p class ='pt-4'>
                    <span class="paragph" >Live Website</span>
                </p>
                </a>
            </div>
        </div>
    </div>
{{-- end of a core --}}
<div>

</body>
</html>