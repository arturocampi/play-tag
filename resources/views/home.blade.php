@extends('layouts.app')
@section('content')

<body class="px-2 background-custom">
    <div class="container-fluid h-100 px-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-success map-completed">
                        Guardar localizaciones <i class="bi bi-check-circle-fill"></i>
                    </a>

                    <a href="#" class="btn btn-danger delete-all-icons">
                        Borrar localizaciones <i class="bi bi-trash3-fill"></i>
                    </a>
                </div>
                <div class="d-flex justify-content-center mt-2 alert alert-info text-center" role="alert">
                    <span>Eres cazador!</span>
                </div>
                <div class="card shadow position-relative">
                    <img src="{{ asset('alagon.png') }}" alt="Village" id="village-image"
                        class="shadow-effect rounded-3 image-container cursor-pointer">
                </div>
                <div class="card mt-2 mb-3">
                    <div class="card-header fw-bold text-center">
                        <p class="mb-0">¡Instrucciones!</p>
                    </div>
                    <div class="card-body">
                        <span><i class="bi bi-dash"></i>Marca los puntos en el mapa y cuando estés listo dale a guardar
                            localizaciones.</span><br>
                        <span><i class="bi bi-dash"></i>Para borrar un punto haz click sobre uno de ellos </span><br>
                        <span><i class="bi bi-dash"></i>Para borrar todos los puntos presiona el botón de borrar
                            localizaciones.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
@include('layouts.style')