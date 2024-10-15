<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio Lutfi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui/dist/full.css">


    <style>
        body {
            background-color: #e5f4fb;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <header class="bg-[#73a8ce] bg-cover bg-center lg:h-screen bg-no-repeat sm:h-[100vh]" id="banner">
        <nav
            class="z-10 fixed block w-[90%] mx-auto sm:ml-8 sm:mr-8 md:ml-8 md:mr-8 lg:ml-16 lg:mr-16 rounded-xl py-1 px-8 shadow-none bg-[#ffffff] bg-opacity-70 top-4 ">
            <div class="container mx-auto flex items-center justify-between text-blue-gray-900">
                <a href="#"
                    class="block w-[80px] h-[50px] leading-relaxed  mr-4 cursor-pointer py-2 px-1 align-middle lg:mb-0 lg:mt-0 items-center"><img
                        src="/image/logo_porto.png" alt=""></a>
                <div class="hidden lg:block">
                    <ul class="mb-4 mt-2 flex flex-col gap-3 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-8">

                        <a href="/">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                About me</li>
                        </a>
                        <a href="/">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                Skills</li>
                        </a>
                        <a href="/">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed hover:text-green-200 p-1 font-medium">
                                Portofolio</li>
                        </a>

                    </ul>
                </div>
                <a href="/login">
                    <li
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-[#059f52] text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hidden lg:inline-block">
                        Hire Me
                    </li>
                </a>
                <button
                    class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 ml-auto inline-block text-blue-gray-900 lg:hidden"
                    type="button" data-ripple-dark="true" data-collapse-target="navbar">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg></span>
                </button>
            </div>
            <div data-collapse="navbar"
                class="block h-0 w-full basis-full overflow-hidden transition-all duration-300 ease-in lg:hidden">
                <div class="mt-2 rounded-xl bg-white py-2">
                    <ul class="mb-4 mt-2 flex flex-col gap-3 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-8">
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Tentang Kami
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Berita
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Perpustakaan
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Pojok Alumni
                            </li>
                        </a>
                        <a href="#">
                            <li
                                class="block antialiased font-sans text-base  leading-relaxed text-blue-gray-900 p-1 font-medium">
                                PPDB
                            </li>
                        </a><a href="#">
                            <li
                                class="block antialiased font-sans text-base leading-relaxed text-blue-gray-900 p-1 font-medium">
                                Hubungi Kami
                            </li>
                        </a>
                    </ul>
                    <button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg  text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none bg-gray-900 block w-full mb-2"
                        type="button" data-ripple-light="true">
                        Sign in
                    </button>
                </div>
            </div>
        </nav>
        <div class="py-44 px-20 text-white w-[60%]">
            <h2 class="text-6xl font-bold">
                Hi, I am Lutfi
            </h2>
            <h2 class="text-5xl font-bold">
                Web Developer Based in Jepara
            </h2>
            <p class="mt-4 text-xl">
                I am an experienced web developer with expertise in Laravel and PHP. I have created various websites to
                enhance work efficiency. A detail-oriented individual who values responsibility and consistently seeks
                to learn new things.
            </p>
            <button
                class=" my-6 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-10 rounded-lg bg-[#059f52] text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hidden lg:inline-block">
                CV
            </button>
            <button
                class=" my-6 mx-6 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-10 rounded-lg bg-[#059f52] text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none hidden lg:inline-block">
                Github
            </button>
        </div>


    </header>
    <div class="bg-[#e5f4fb] h-[300vh] " id="content">

        <div
            class="flex mt-8 flex-col md:flex-row justify-center space-y-8 md:space-y-0 md:space-x-4 w-[80rem] h-[35rem] mx-[100px] ">
            <div class="py-24 px-16 text-black  w-[70%] ">
                <h2 class="text-5xl font-bold">
                    About Me
                </h2>

                <p class="mt-4 text-lg ">
                    Fresh graduate in Computer Science with a keen interest in web development. Experienced in creating
                    various systems to enhance work efficiency. Detail-oriented, responsible, and consistently eager to
                    learn new things. Actively involved in organizations and proficient with various tools and
                    applications. Possesses strong time management, teamwork, creativity, adaptability, and
                    communication skills. Highly dedicated and motivated to join a company to grow together and develop
                    expertise in the IT field.</p>
            </div>
            <div class="py-24 px-16 text-black w-[30%]">
                <img src="/image/kambing.jpg" alt="">
            </div>
        </div>
        <div class=" mt-8  justify-center space-y-8 md:space-y-0 md:space-x-4 w-[80rem] h-[35rem] mx-[100px]">
            <h2 class=" text-center text-5xl font-bold">
                My Skills
            </h2><br>
            <div class="bg-[#ffffff]  h-[100%] rounded-xl  justify-center space-y-8 md:space-y-0 md:space-x-4 w-[80rem] mx-[100px] shadow-md">
                <br>
                <h2 class=" text-center text-xl font-bold ">
                    Using Now :
                </h2><br><br>
                <div class="mt-8 flex flex-col md:flex-row justify-center space-y-8 space-x-20 md:space-y-0 md:space-x-16">
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/html_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">HTML</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/css_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">CSS</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/js.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">JAVASCRIPT</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/php_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">PHP</h3>
                    </div>
                </div>
                <div class="mt-8 flex flex-col md:flex-row justify-center space-y-8 md:space-y-4 md:space-x-16">
                    <div class="w-[100px] flex flex-col items-center pt-4">
                        <img src="/image/laravel_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">LARAVEL</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/tailwins_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">TAILWINS</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/mysql_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">MY SQL</h3>
                    </div>
                    <div class="w-[100px] flex flex-col items-center">
                        <img src="/image/git_nb.png" class="w-auto h-[50px]" alt="">
                        <h3 class="mt-4 text-center text-lg text-black">GIT HUB</h3>
                    </div>
                </div>
                
                

            </div>
        </div>

    </div>

    {{-- footer --}}
    <footer class="bg-green-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Yayasan Baiturrahman. All rights reserved.</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href="#" class="hover:text-gray-400">Instagram</a>
                <a href="#" class="hover:text-gray-400">Facebook</a>
                <a href="#" class="hover:text-gray-400">Contact Us</a>
            </div>
        </div>
    </footer>
</body>

</html>
