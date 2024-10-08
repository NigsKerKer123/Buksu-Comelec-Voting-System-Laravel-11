<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buksu Comelec: Positions</title>
    <link rel="icon" href="{{ asset('images/tab_icon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-50">
    @include("components.nav")
    @include("components.sidebar")
    @include("admin.position.body")
</body>
</html>

<style>
    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>