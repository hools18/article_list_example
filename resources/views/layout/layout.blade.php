<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.blocks.head')
<body class="antialiased">
@include('layout.blocks.navbar')
@include('layout.blocks.header')

<main id="app">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>

@include('layout.blocks.footer')
</body>
</html>
