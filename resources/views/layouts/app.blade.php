<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Play Tag') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <div class="container d-flex justify-content-between mt-3">
            <a href="{{ route('login') }}" type="submit" class="button-17">
                <span>{{ __('Log in') }}</span>
            </a>
            <a href="/" class="mt-2">
                <img class="me-2 svg-pokeball" src="{{ asset('pokeball.svg') }}" alt="logo" width="50" height="50">
            </a>
            <a href="{{ route('register') }}" type="submit" class="button-17">
                <span>{{ __('Register') }}</span>
            </a>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>