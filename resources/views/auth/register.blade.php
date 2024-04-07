@extends('layouts.app')

@section('content')

<body class="background-custom">
    <div class="container h-100">
        <div class="row d-flex justify-content-md-center align-items-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center bebas-neue-regular">
                    <a class="text-decoration-none title" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">PLAY
                        TAG</a>
                </div>
                <div class="card shadow">
                    <div class="card-body p-5">
                        <!-- <h1 class="fs-4 card-title fw-bold mb-4 text-center bebas-neue-regular">PLAY TAG</h1> -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="nickname">{{ __('Nickname') }}</label>
                                <input id="nickname" type="nickname"
                                    class="form-control @error('nickname') is-invalid @enderror" name="nickname"
                                    value="{{ old('nickname') }}" required autocomplete="nickname" autofocus>

                                @error('nickname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">{{ __('Password') }}</label>
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


                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label for="password-confirm" class="text-muted">{{
                                        __('Confirm password') }}</label>
                                </div>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="button-28">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            <a href="{{ route('login') }}" class="text-dark">{{__('Log in')}}</a>
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