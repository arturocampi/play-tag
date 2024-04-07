<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Play Tag') }}</title>    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
@include('layouts.style')

<body class="background-custom">
    <div class="container-fluid h-100 p-0">
        <nav class="navbar">
            <div class="container d-flex justify-content-between mt-3">
                <a href="{{ route('login') }}" type="submit" class="button-17">
                    <span>{{ __('Log in') }}</span>
                </a>
                <a href="/" class="mt-2">
                    <img class="me-2 svg-pokeball size-up-animation" src="{{ asset('pokeball.svg') }}" alt="logo" width="50" height="50">
                </a>
                <a href="{{ route('register') }}" type="submit" class="button-17">
                    <span>{{ __('Register') }}</span>
                </a>
            </div>
        </nav>
        <div class="play-title">
            <a class="text-decoration-none" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">PLAY TAG</a>
        </div>
    </div>
</body>

</html>