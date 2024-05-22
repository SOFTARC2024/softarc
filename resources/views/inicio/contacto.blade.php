@extends('layouts.plantilla')

@section('eleccion')
    <a href="{{ route('inicio.index') }}" class="nav-item nav-link">Inicio</a>
    <a href="{{ route('inicio.nosotros') }}" class="nav-item nav-link">Nosotros</a>
    <a href="{{ route('inicio.servicios') }}" class="nav-item nav-link">Servicios</a>
    <a href="{{ route('inicio.asociados') }}" class="nav-item nav-link">Asociados</a>
    <a href="{{ route('inicio.contacto') }}" class="nav-item nav-link active">Contacto</a>
    <a href="{{ route('login') }}" class="nav-item nav-link">Iniciar Sesión</a>
@endsection()

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header4 mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Contacto</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="{{ route('inicio.index') }}">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Contacto</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contactanos</h4>
            <h1 class="display-4">Siéntase libre de contactarnos</h1>
        </div>
        <div class="row px-3 pb-2">
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Ubicación</h4>
                <p>C. 55, San Juan de Lurigancho 15416</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Teléfono</h4>
                <p>+51 963 409 359</p>
            </div>
            <div class="col-sm-4 text-center mb-3">
                <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                <h4 class="font-weight-bold">Email</h4>
                <p>info@softwarearchitec.com</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 pb-5">
            </div>
            <div class="col-md-6 pb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Nombre y Apellido"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="DNI"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Correo Electrónico"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                        <div class="control-group">
                            <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Mensaje"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
    
@endsection()
