<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fast Car | Home Page</title>

  <!-- Logo bar -->
  <link rel="icon" type="image/png" href="img/logo.png">

  <link rel="stylesheet" href="../css/app.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  @vite('resources/css/app.css')

</head>

<body>

  <!-- Navbar Section -->
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../img/logo.png" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Fast Car</span>
      </a>
      <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
          class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
          id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
          data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="../img/1.jpg" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div
          class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
          id="user-dropdown">
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="dasboard-customers"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
            </li>
            <li>
              <a href="/logout"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Homepage</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Products</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Banner Information -->
  <section
    class="bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1562716190-5c19488ea1fe?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center pt-24 lg:py-32">
      <div
        class="inline-flex justify-between items-center mt-6 py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
        <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span
          class="text-sm font-medium">A new car is here for you! See what's new</span>
        <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
      </div>
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Enjoy Your
        Holiday With Awesome Vehicle</h1>
      <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Cruise in Style and Comfort:
        Elevate Your Holiday Experience with Our Exceptional Fleet of Vehicles</p>
      <div
        class="container px-[30px] py-6 max-w-[1170px] mx-auto flex flex-col lg:flex-row justify-between mt-16 lg:mt-24 gap-2 lg:gap-x-3 relative lg:-top-16 lg:shadow bg-white lg:bg-transparent backdrop-blur rounded-lg">
        <div>
          <label for="text" class="block mb-2 text-sm font-medium text-white dark:text-white">Pick up
            Location</label>
          <input type="text" id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Find your location" required>
        </div>
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Pick up
            Date</label>
          <input type="date" id="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>
        </div>
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-white dark:text-white">Return
            Date</label>
          <input type="date" id="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required>
        </div>
        <button type="button" class="text-white bg-color font-medium rounded-lg text-sm px-6 py-4 focus:outline-none">
          <a href="">Search</a>
        </button>
      </div>
    </div>
  </section>

  <!-- Section Header -->
  <section>
    <header class="container pt-14 p-8">
      <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
          <img class="h-8" src="../img/fire.png" alt="">
          <h1 class="text-2xl font-medium">Drive your dream cars</h1>
        </div>
        <button
          class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-2">
          <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
            href="">See More</a>
        </button>
      </div>
      <div class="lg:flex lg:items-center lg:justify-center lg:gap-12 mt-14">
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
      <div class="lg:flex lg:items-center lg:justify-center lg:gap-12 mt-8">
        <div class="card">
          <img class="lg:w-full h-full object-cover mt-6 px-4 py-2" src="img/crv.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">stock ready</span>
              <span class="badge">most recommend</span>
            </div>
            <h2 class="tittle">Honda CR-V</h2>
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
          <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/mazda.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">stock ready</span>
              <span class="badge">most recommend</span>
            </div>
            <h2 class="tittle">Mazda 3</h2>
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
          <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/civic.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">stock ready</span>
              <span class="badge">most recommend</span>
            </div>
            <h2 class="tittle">Civic</h2>
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
          <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/brv.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">stock ready</span>
              <span class="badge">most recommend</span>
            </div>
            <h2 class="tittle">Honda BR-V</h2>
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
    </header>
  </section>

  <!-- New Arrival -->
  <section>
    <header class="container pt-12 p-8">
      <div class="flex items-center justify-between space-x-2 rtl:space-x-reverse">
        <div class="flex items-center space-x-2 rtl:space-x-reverse">
          <img class="h-8" src="../img/car.png" alt="">
          <h1 class="text-2xl font-medium">New Arrival Cars</h1>
        </div>
        <button
          class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-2">
          <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
            href="">See More</a>
        </button>
      </div>
      <div class="lg:flex lg:items-center lg:justify-around lg:gap-8 mt-14">
        <div class="card bg-green-100">
          <img class="lg:w-full h-full object-cover mt-6 px-4 py-2" src="img/pict1.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">new car</span>
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
        <div class="card bg-yellow-100">
          <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict2.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">new car</span>
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
        <div class="card bg-orange-100">
          <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict3.png" alt="All New Avanza">
          <div class="p-5 flex flex-col gap-3">
            <div class="flex items-center gap-2">
              <span class="badge">new car</span>
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
        <div class="card bg-red-100">
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
    </header>
  </section>


  <!-- CTA Section -->
  <!-- <section class="bg-gray-600 mt-16 p-8">
    <div class="container text-center text-white p-8">
      <div>
        <h1 class="text-3xl font-semibold mb-3">Let's Start Your Global Journey With <span class="text-color">Fast
            Car</span></h1>
        <p class="text-base mb-4">Unleash the Thrill of [Fast Car Model] and Begin Your Expedition Across Boundaries in
          Style and Speed</p>
        <button class="px-14 py-2 bg-color rounded-full justify-center items-center inline-flex mt-2">Let's
          Begin</button>
      </div>
    </div>
  </section> -->


  <!-- Footer -->
  <footer class="bg-secondary text-white
    mt-8 py-6">
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






  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>