<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none font-sans">
    <div class="flex h-screen px-8 py-8 bg-gray-300 space-x-3">
    <aside>
        <span class="sideBarResponsive text-cool-gray-400 text-3xl flex mx-auto hover:bg-cool-gray-200 focus:bg-cool-gray-200 transition-colors duration-200 ease-in rounded p-2 cursor-pointer">
            <i class="fa-solid fa-grip-lines"></i>
        </span>
    </aside>
    
    <aside id="toggleWidth" class=" bg-white md:w-72 rounded-lg shadow-xl px-4 py-2 flex flex-col justify-between">
        <nav>
            <div>
                <ul class="py-4">
                    <span class="hover:bg-gray-200 transition-color duration-200 ease-in focus:bg-gray-200 rounded p-4 flex items-center space-x-2 text-cool-gray-500 font-black">
                        <span class="text-cool-gray-400">
                            <i class="fa-solid fa-car"></i>
                        </span>
                        <span id="makeToggle" class="md:block">
                            <select class="form-select block w-full mt-1" id="makeFilter" name="make-filter">
                                <option selected disabled>Select Make</option>
                                @forelse ($makes as $make )
                                    <option class="hover:bg-orange-400 focus:bg-orange-400 transition-colors duration-150 ease-in text-cool-gray-900" value="{{ $make->name }}">{{ $make->name }}</option>
                                @empty
                                    <option>No Data</option>
                                @endforelse
                            </select>
                        </span>
                    </span>
                    <span class="hover:bg-gray-200 transition-color duration-200 ease-in focus:bg-gray-200 rounded p-4 flex items-center space-x-2 text-cool-gray-500 font-black">
                        <span class="text-cool-gray-400">
                            <i class="fa-solid fa-car"></i>
                        </span>
                        <span id="modelToggle" class="md:block">
                            <select class="form-select block w-full mt-1" id="modelFilter">
                                <option selected disabled>Select Model</option>
                                @forelse ($carModels as $carModel)
                                    <option class="hover:bg-orange-400 focus:bg-orange-400 transition-colors duration-150 ease-in text-cool-gray-900" value="{{ $carModel->name }}">{{ $carModel->name }}</option>
                                @empty
                                    <option>No Data</option>
                                @endforelse
                            </select>
                        </span>
                    </span>
                    <span class="hover:bg-gray-200 transition-color duration-200 ease-in focus:bg-gray-200 rounded p-4 flex items-center space-x-2 text-cool-gray-500 font-black">
                        <span class="text-cool-gray-400">
                           <i class="fa-solid fa-calendar-days"></i>
                        </span>
                        <span id="yearToggle" class="md:block">
                            <select class="form-select block w-full mt-1" id="yearFilter">
                                <option selected disabled>Select Year</option>
                                @forelse ($years as $year)
                                    <option class="hover:bg-orange-400 focus:bg-orange-400 transition-colors duration-150 ease-in text-cool-gray-900" value="{{ $year->year }}">{{ $year->year }}</option>
                                @empty
                                    <option>No Data</option>
                                @endforelse
                            </select>
                        </span>
                    </span>
                    <a href="#" class="hover:bg-gray-200 transition-color duration-200 ease-in focus:bg-gray-200 rounded p-4 flex items-center space-x-2 text-cool-gray-500 font-black">
                        <span class="text-cool-gray-400">
                            <i class="fa-solid fa-bug"></i>
                        </span>
                        <span id="reportsToggle" class="md:block">
                            Reports
                        </span>
                    </a>
                </ul>
                <div class="mt-2 p-4">
                    <span class="text-cool-gray-900 font-mono font-medium p-4 bg-gray-300 hover:bg-blue-500 focus:bg-blue-400 rounded shadow hidden  duration-300 ease-in transition-colors">Socials</span>
                <ul>
                    <a href="#facebook">
                        <span><img src="https://img.icons8.com/cotton/64/000000/facebook.png"/></span>
                    </a>
                    <a href="#instagram">
                        <span><img src="https://img.icons8.com/cotton/64/000000/instagram-new.png"/></span>
                    </a>
                </ul>
                </div>
            </div>
        </nav>
        <div class="flex items-center justify-between">
            <div id="profileToggle" class="md:flex items-center space-x-3">

                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1623582854588-d60de57fa33f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=120&q=80" alt="profile">
                <div class="flex flex-col">
                    <span class="font-medium">#YourName</span>
                    <span class="text-sm text-cool-gray-300 hover:text-blue-400">View Profile</span>
                </div>
            </div>
            <button type="button" class="group p-1 text-cool-gray-400 hover:bg-gray-100 focus:bg-gray-100 py-2 px-2">
                <span class="transform group-hover:rotate-45 transition-transform duration-150 ease-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cool-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </span>
            </button>
        </div>
    </aside>
    <header class="bg-blue-500 w-20 h-20 rounded-lg shadow-xl p-2 justify-between fixed z-10 right-8">
        <div class="container mx-auto p-1">
            <div class="flex items-start space-x-2">
                
                <div class="p-2">
                    <ul>
                        <a href="#">Main</a>
                        <a href="#">Logout</a>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full bg-white rounded-md shadow-inner overflow-y-scroll flex-grow-0 p-4">
        @yield('user-dashboard')
    </main>
</div>
<script src="{{ asset('js/jquery/jquery-3.6.0.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('js/responsiveUser/UserDashBoard.js') }}"></script>
<script src="{{ asset('js/filterSearch/filterAuto.js') }}"></script>
</body>
</html>
