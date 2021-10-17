<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JA Auto-Space') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <nav class="bg-white shadow dark:bg-gray-800">
        <div
          class="container px-6 py-3 mx-auto md:flex md:justify-between md:items-center"
        >
          <div class="flex items-center justify-between">
            <div>
              <a
                class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                href="/"
                >
                    {{ config('app.name', 'JA Auto-Space') }}
                </a
              >
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
              <button
                type="button"
                class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                aria-label="toggle menu"
              >
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                  <path
                    fill-rule="evenodd"
                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                  ></path>
                </svg>
              </button>
            </div>
          </div>

          <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
          <div class="items-center md:flex">
            <div class="flex flex-col md:flex-row md:mx-6">
              <a
                class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                href="#"
                >Home</a
              >
              <a
                class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                href="#"
                >Shop</a
              >
              <a
                class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                href="#"
                >Contact</a
              >
              <a
                class="my-1 text-gray-700 dark:text-gray-200 hover:text-indigo-500 dark:hover:text-indigo-400 md:mx-4 md:my-0"
                href="#"
                >About</a
              >
            </div>

            <div class="flex justify-center md:block">
              <a
                class="relative text-gray-700 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-300"
                href="#"
              >
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                <span
                  class="absolute top-0 left-0 p-1 text-xs text-white bg-indigo-500 rounded-full"
                ></span>
              </a>
            </div>
          </div>
        </div>
      </nav><br><br>

    <main>
        @yield('admin-panel')
    </main>
</body>
</html>
