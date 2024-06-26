<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Play Tag') }}</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
@include('layouts.style')

<body class="background-custom">
    <div class="container-fluid h-100">
        <nav class="navbar">
            <div class="container d-flex justify-content-between">
                <a href="{{ route('login') }}" type="submit" class="button-17" style="width: 125px;">
                    <span>{{ __('Log in') }}</span>
                </a>
                <a href="/" class="text-center mt-2" style="width: 125px;">
                    <img class="svg-pokeball size-up-animation" src="{{ asset('pokeball.svg') }}" alt="logo" width="50" height="50">
                </a>
                <a href="{{ route('register') }}" type="submit" class="button-17" style="width: 125px;">
                    <span>{{ __('Registrarse') }}</span>
                </a>
            </div>
        </nav>
        <div class="play-title">
            <a class="text-decoration-none" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">PLAY TAG</a>
        </div>
    </div>
</body>

</html>