<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

@include('layount.blocks.navbar')
@include('layount.blocks.header')
<main id="app">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>
@include('layount.blocks.footer')
</body>
</html>
