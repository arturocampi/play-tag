<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Play Tag') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/map.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar">
        <div class="container d-flex justify-content-between mt-3">
            @guest
            <a href="{{ route('login') }}" type="submit" class="button-17">
                <span>{{ __('Log in') }}</span>
            </a>
            <a href="/" class="mt-2">
                <img class="svg-pokeball size-up-animation" src="{{ asset('pokeball.svg') }}" alt="logo" width="50"
                height="50">
            </a>
            <a href="{{ route('register') }}" type="submit" class="button-17">
                <span>{{ __('Registrarse') }}</span>
            </a>
            @endguest
            @auth
            <a href="{{ route('home') }}" type="submit" class="button-17">
                <span>{{ __('Botón') }}</span>
            </a>
            <a href="/" class="mt-2">
                <img class="svg-pokeball size-up-animation" src="{{ asset('pokeball.svg') }}" alt="logo" width="50"
                height="50">
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="button-17">
                @csrf
                <a type="submit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Salir') }}</a>
            </form>
            @endauth
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>