<!DOCTYPE html>
<html lang="en"">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buksu Comelec: Login</title>
        <link rel="icon" href="{{ asset('images/tab_icon.png') }}" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    
    <body>
        <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                class="absolute inset-0 bg-gradient-to-r from-purple-400 to-yellow-100 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                
                <div class="relative bg-white shadow-lg sm:rounded-3xl p-10">
                    <div class="max-w-md mx-auto">
                        <div class="flex items-center justify-start rtl:justify-end space-x-4">
                            <img src="{{ asset('images/logo.jpg') }}" alt="logo" class="w-16 h-16 rounded-full">
                            <h1 class="text-[35px] font-bold whitespace-nowrap dark:text-white bebas-neue-regular">Login</h1>
                        </div>
                        
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Danger alert!</span> {{$error}}
                                </div>
                            </div>
                            @endforeach
                        @endif

                        <form action="{{route('login')}}" method="POST">

                        <div class="divide-y divide-gray-200">
                            <div class="text-base leading-6 space-y-5 text-gray-700 sm:text-lg sm:leading-7">
                                @csrf
                                <div class="relative lg:w-64">
                                    <input autocomplete="off" id="email" name="email" type="email" class="rounded-lg peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="email" value="gwapoko@gmail.com"/>
                                    <label for="email" class="px-3 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-5 peer-focus:text-gray-600 peer-focus:text-sm">email</label>
                                </div>

                                <div class="relative">
                                    <input autocomplete="off" id="password" name="password" type="password" class="rounded-lg peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" value="gwapoko123"/>
                                    <label for="password" class="px-3 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                                </div>

                                <div class="relative" style="margin-top: 1rem;">
                                    <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Login</button>
                                </div>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>