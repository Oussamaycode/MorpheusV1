<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - @yield('title', 'Home')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation Bar (optional, often a component or include) -->
        {{-- @include('layouts.navigation') --}}

        <!-- Page Content -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
