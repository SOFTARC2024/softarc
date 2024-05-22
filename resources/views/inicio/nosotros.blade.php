@extends('layouts.plantilla')

@section('eleccion')
    <a href="{{ route('inicio.index') }}" class="nav-item nav-link">Inicio</a>
    <a href="{{ route('inicio.nosotros') }}" class="nav-item nav-link active">Nosotros</a>
    <a href="{{ route('inicio.servicios') }}" class="nav-item nav-link">Servicios</a>
    <a href="{{ route('inicio.asociados') }}" class="nav-item nav-link">Asociados</a>
    <a href="{{ route('inicio.contacto') }}" class="nav-item nav-link">Contacto</a>
    <a href="{{ route('login') }}" class="nav-item nav-link">Iniciar Sesión</a>
@endsection()

@section('content')
    
<!-- Page Header Start -->
<div class="container-fluid page-header1 mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Nosotros</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="{{ route('inicio.index') }}">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Nosotros</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nosotros</h4>
            <h1 class="display-4">Software Architec Perú</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Innovación y Transformación Digital</h1>
                <h5 class="mb-3">Proporcionamos soluciones innovadoras a clientes de todo el país.
                </h5>
                <p>Nos distinguimos por nuestro enfoque centrado en el cliente y nuestra pasión por la excelencia. Nos esforzamos por entender las necesidades únicas de cada cliente y ofrecer soluciones a medida que impulsen su éxito empresarial.
                    Estamos constantemente innovando y buscando nuevas formas de abordar los desafíos tecnológicos del mundo actual.</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Ver más</a>
            </div>
            <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-70" src="{{ asset('imagenes/SIMBOLO.png') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-0 py-lg-5">
                <h1 class="mb-3">Colaboración y Asociaciones</h1>
                <h5 class="mb-3">Trabajamos codo a codo con nuestros clientes para entender sus metas y desafíos
                </h5>
                <p>Desarrollamos soluciones que les permitan alcanzar el éxito.
                    Nos enorgullece ser parte del motor de la innovación tecnológica y esperamos poder trabajar contigo para impulsar el crecimiento de tu negocio en la era digital.
                    Nuestro equipo está compuesto por mentes brillantes y apasionadas por la tecnología, con experiencia en una amplia gama de disciplinas.</p>
                <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Ver más</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
    
@endsection()
