@extends('layouts.plantilla')

@section('eleccion')
    <a href="{{ route('inicio.index') }}" class="nav-item nav-link">Inicio</a>
    <a href="{{ route('inicio.nosotros') }}" class="nav-item nav-link">Nosotros</a>
    <a href="{{ route('inicio.servicios') }}" class="nav-item nav-link">Servicios</a>
    <a href="{{ route('inicio.asociados') }}" class="nav-item nav-link active">Asociados</a>
    <a href="{{ route('inicio.contacto') }}" class="nav-item nav-link">Contacto</a>
    <a href="{{ route('login') }}" class="nav-item nav-link">Iniciar Sesión</a>
@endsection()

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header3 mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Asociados</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="{{ route('inicio.index') }}">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Asociados</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- asociados Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Asociados</h4>
            <h1 class="display-4">Nuestros Equipos</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1 class="mb-5">Sistemas</h1>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Equipo Scrum</h4>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Equipo de Base de Datos</h4>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Team Developer</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-5">Comunicaciones</h1>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Diseñadores</h4>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Fotógrafos</h4>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset('imagenes/usu1.png') }}"
                            alt="">
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>Community Manager</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- asociados End -->
    
@endsection()
