<!DOCTYPE html>
<html lang="en"">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buksu Comelec: Login</title>
        <link rel="icon" href="{{ asset('images/tab_icon.png') }}" type="image/x-icon">
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
                            <h1 class="text-xl font-bold sm:text-2xl whitespace-nowrap dark:text-white">Login</h1>
                        </div>

                        <form action="{{route('login')}}" method="POST">

                        <div class="divide-y divide-gray-200">
                            <div class="text-base leading-6 space-y-5 text-gray-700 sm:text-lg sm:leading-7">
                                    @csrf
                                    <div class="relative">
                                        <input autocomplete="off" id="email" name="email" type="email" class="rounded-lg peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="email" />
                                        <label for="email" class="px-3 absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-5 peer-focus:text-gray-600 peer-focus:text-sm">email</label>
                                    </div>

                                    <div class="relative">
                                        <input autocomplete="off" id="password" name="password" type="password" class="rounded-lg peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
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

@if(Session::has('success'))
    <script>
        alert("{{ Session::get('success') }}");
    </script>
@endif

@if(Session::has('error'))
    <script>
        alert("{{ Session::get('error') }}");
    </script>
@endif