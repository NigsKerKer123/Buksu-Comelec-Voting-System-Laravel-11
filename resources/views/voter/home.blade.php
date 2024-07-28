<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buksu Comelec: Voter admin</title>
    <link rel="icon" href="{{ asset('images/tab_icon.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">logout</button>
    </form>
    
    <h1>This is voter</h1>
</body>
</html>