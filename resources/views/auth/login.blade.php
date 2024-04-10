@extends('layouts.app')

@section('content')

<body class="background-custom">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center bebas-neue-regular">
                    <a class="text-decoration-none title" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">PLAY TAG</a>
                </div>
                <div class="card shadow">
                    <div class="card-body p-5">
                        <!-- <h1 class="fs-4 card-title fw-bold mb-4 text-center bebas-neue-regular">PLAY TAG</h1> -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="username">{{ __('Nombre de usuario') }}</label>
                                <input id="username" type="username"
                                    class="form-control @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">{{ __('Contraseña') }}</label>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="form-check-label"> {{ __('Guardar credenciales') }}</label>
                                </div>
                                <button type="submit" class="button-28">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="text-dark">{{__('Registrarse')}}</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-dark">
                    Copyright &copy; 2024 &mdash; arturocampi
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
@include('layouts.style')