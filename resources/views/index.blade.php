<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fast Car</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }

            .bg-img {
                background-image: url('{{ asset(' img/img.png') }}');
                background-size: cover;
                background-cover: no-repeat;
            }
        }
    </style>

    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logo.png">

    <link rel="stylesheet" href="../css/app.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="overflow-y-scroll">
    <!-- Top Navbar -->
    <div class="bg-secondary w-full p-0.5">
        <div class="container mx-auto flex justify-center md:justify-between lg:justify-between text-white">
            <p class="font-medium text-xs hidden md:flex">Powered by Void</p>
            <p class="font-medium text-xs">Get Promos for New Years!</p>
            <p class="font-medium text-xs hidden md:flex"><img class="w-3 mr-2" src="img/phone.svg"
                    alt="">0822-3788-6327</p>
        </div>
    </div>
    <!-- End Top Navbar -->

    <section class="">
        <div class="bg-white shadow flex justify-between items-center p-2 md:items-center md:justify-between">
            <div>
                <span class="text-2xl font-[Poppins] cursor-pointer font-bold">
                    <a class="font-bold text-xl pt-4" href="">
                        <img class="h-10 inline" src="img/logo.png" alt="">
                        FAST CAR
                    </a>
                </span>
            </div>
            <ul class="text-secondary text-sm lg:flex gap-7 hidden">
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#home">Home</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#specialdeals">Special Deals</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#about">About Us</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Testimonials</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Contact</a>
                </li>
            </ul>
            <div class="lg:flex hidden">
                <button class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded">
                    <a href="{{ route('login') }}">Login</a>
                </button>
            </div>
            <button class="lg:hidden block btntoogle">
                <img class="h-6" src="img/hamburger-menu.png" alt="">
            </button>
        </div>

        <div class="mobile hidden mx-auto lg:hidden md:hidden">
            <ul class="text-secondary text-sm font-normal gap-7">
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#home">Home</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#specialdeals">Special Deals</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#about">About Us</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Testimonials</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Contact</a>
                </li>
            </ul>
            <div class="lg:flex mt-3">
                <button class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded">
                    <a href="{{ route('login') }}">Login</a>
                </button>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section id="home" class="py-5">
        <div class="container mx-auto flex flex-wrap items-center justify-center mt-10 md:px-12 md:flex-row">
            <div class="mb-14 lg:mb-0 lg:mb-1/2">
                <h1
                    class="max-w-xl text-4xl leading-none text-secondary font-bold text-center leading-normal lg:text-6xl lg:tracking-normal lg:text-left lg:leading-normal mb-5">
                    Enjoy Your Travel Experience With <span class="text-color">Easy And Fast</span></h1>
                <p class="max-w-xl text-center text-secondary leading-normal lg:leading-7 lg:text-left lg:max-w-md">
                    We're offer a wide range of
                    rentals to suit you need. Whether, you're planning a weekend getaway or a business trip</p>
            </div>
            <div class="">
                <img class="h-1/2 rounded-2xl" src="img/img.png" alt="">
            </div>
        </div>
        <div
            class="container px-[30px] py-6 max-w-[1170px] mx-auto flex flex-col lg:flex-row justify-between mt-8 gap-4 lg:gap-x-3 relative lg:-top-16 lg:shadow bg-white lg:bg-transparent backdrop-blur rounded-lg">
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick up
                    Location</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick up
                    Date</label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Return
                    Date</label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <button type="button"
                class="text-white bg-color font-medium rounded-lg text-sm px-8 py-4 focus:outline-none">
                <a href="">Search</a>
            </button>
        </div>
    </section>

    <!-- Why Us -->
    <section class="ride mt-12 bg-secondary p-20">
        <div class="heading">
            <span class="text-color">WHY US</span>
            <h1>Enjoy Your Travelling With Fast and Easy Rents</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class="fa fa-solid fa-gear"></i>
                <h2>Healthy Machine Standardization</h2>
                <p>Elevating Wellness: Advancing Healthy Machine Standardization for Optimal Performance and
                    Sustainability.</p>
            </div>

            <div class="box">
                <i class="fa fa-regular fa-handshake"></i>
                <h2>Friendly and Fast Service</h2>
                <p>Effortless Excellence: Providing Friendly and Fast Service to Elevate Your Experience.</p>
            </div>

            <div class="box">
                <i class="fa fa-solid fa-money-bill" style="color: #ffffff;"></i>
                <h2>Cheap Price and Safe</h2>
                <p>Affordable Assurance: Offering Cheap Prices with Uncompromised Safety Standards for Your Peace of
                    Mind.</p>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="" id="specialdeals">
        <div class="container lg:h-screen mx-auto mt-14">
            <div class="text-center lg:flex lg:justify-between mt-4 p-8">
                <h1
                    class="text-secondary text-[28px] lg:text-4xl font-medium lg:font-semibold leading-loose tracking-widest mt-4">
                    Specials
                    <span
                        class="text-color text-[28px] lg:text-4xl font-semibold leading-loose tracking-widest">Offer</span>
                </h1>
                <button
                    class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-2">
                    <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
                        href="">See More</a>
                </button>
            </div>
            <div class="lg:flex lg:items-center lg:justify-center lg:gap-12 mt-12">
                <div class="card">
                    <img class="lg:w-full h-full object-cover mt-6 px-4 py-2" src="img/pict1.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">All New Avanza</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">8 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict2.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Rush</h2>
                        <p class="text-xl font-bold">Rp 400.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 550.000</p>
                            <p class="percent">save 20% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict3.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Veloz</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">9 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict4.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Honda HR-V</h2>
                        <p class="text-xl font-bold">Rp 450.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 500.000</p>
                            <p class="percent">save 25% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about bg-secondary p-4">
        <div class="container">
            <div class="flex items-center justify-center mt-8 py-20">
                <div>
                    <img class="rounded-sm w-[810px] h-[455px]" src="img/about1.png" alt="">
                </div>
                <div class="mb-14 lg:mb-0 lg:mb-1/2">
                    <h1 class="headline mb-6">Feel The Best Experience With Our Rental Deals</h1>
                    <p class="desc mb-10 w-96">Immerse Yourself in Excellence: Elevate Your Journey with Unparalleled
                        Experiences Through Our Exclusive Rental Deals</p>
                    <button class="text-color text-sm font-medium tracking-wider ml-4">
                        <a href="">Learn More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="faq">
        <div class="container mx-auto mt-14 p-16">
            <div>
                <h1 class="text-2xl font-semibold mb-2">Frequently asked questions</h1>
                <p class="text-base">Explore Common Queries and Clarifications in Our FAQ Section</p>
                <div class="container bg-white rounded-lg dark:bg-gray-800 mt-4">
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <span>What happens if I return the car late?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Late returns may incur additional
                                    charges. It's crucial to communicate with the rental company if you anticipate being
                                    late to make necessary arrangements.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                aria-controls="accordion-flush-body-2">
                                <span>What is the fuel policy?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Rental cars are typically provided with
                                    a full tank, and customers are expected to return the vehicle with a full tank. Some
                                    companies offer pre-paid fuel options.</p>
                            </div>
                        </div>
                        <h2 id="accordion-flush-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                                data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                                aria-controls="accordion-flush-body-3">
                                <span>What should I do in case of an accident or breakdown?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">Contact the rental company and local
                                    authorities immediately. Most companies provide roadside assistance and guidelines
                                    on what steps to take in such situations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="testi mt-8">
        <div class="heading">
            <span class="text-color">Testimonials</span>
            <h1>What Our Customers Say</h1>
        </div>
        <div class="testi-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="box bg-white p-6 rounded-lg">
                <div class="stars">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star-half"></i>
                </div>
                <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus
                    porro
                    voluptate ut itaque ducimus vel corporis minus dolores!</p>
                <div class="flex items-center mt-2">
                    <div class="testi-img">
                        <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi1.png" alt="Morgan Steve">
                    </div>
                    <div>
                        <h2 class="font-bold">Morgan Steve</h2>
                        <span>Traveller</span>
                    </div>
                </div>
            </div>

            <div class="box bg-white p-6 rounded-lg">
                <div class="stars">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star-half"></i>
                </div>
                <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus
                    porro
                    voluptate ut itaque ducimus vel corporis minus dolores!</p>
                <div class="flex items-center mt-2">
                    <div class="testi-img">
                        <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi2.png" alt="Morgan Steve">
                    </div>
                    <div>
                        <h2 class="font-bold">Jessica Lawrence</h2>
                        <span>Food Vlogger</span>
                    </div>
                </div>
            </div>

            <div class="box bg-white p-6 rounded-lg">
                <div class="stars">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star-half"></i>
                </div>
                <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus
                    porro
                    voluptate ut itaque ducimus vel corporis minus dolores!</p>
                <div class="flex items-center mt-2">
                    <div class="testi-img">
                        <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi3.png" alt="Morgan Steve">
                    </div>
                    <div>
                        <h2 class="font-bold">Martis Bounce</h2>
                        <span>Influencer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary text-white
    mt-16 py-6">
        <div class="container mx-auto flex justify-between pt-4 py-4">
            <div class="w-1/3">
                <a href="#" class="text-2xl font-bold flex items-center">
                    <img class="h-8 mr-2" src="img/logo.png" alt="Logo">
                    FAST CAR
                </a>
                <p class="mt-4 text-[16px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum,
                    delectus dolore
                    exercitationem sunt eius quod.</p>
            </div>
            <ul class="flex flex-col lg:flex-row lg:space-x-8 mt-6 lg:mt-0">
                <li><a href="" class="hover:text-color text-sm">About Us</a></li>
                <li><a href="" class="hover:text-color text-sm">Our Rents</a></li>
                <li><a href="" class="hover:text-color text-sm">Terms & Conditions</a></li>
                <li><a href="" class="hover:text-color text-sm">Privacy Policy</a></li>
                <li>
                    <button class="bg-color p-3">
                        <a href="#" class=""><i class="fa-solid fa-phone mr-2"></i>+62 822 3788
                            6327</a>
                    </button>
                </li>
            </ul>
        </div>
        <hr>
        <div class="text-[12px] opacity-60 text-center mt-2">
            <span>Copyright ©2023 VOID</span>
        </div>
    </footer>











































    <!-- Dropdown menu -->
    <div id="dropdownDelay"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                    out</a>
            </li>
        </ul>
    </div>


    <script>
        const btntoogle = document.querySelector('.btntoogle');
        const mobile = document.querySelector('.mobile');

        btntoogle.addEventListener('click', function () { classList.to('hn'});
    </script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>