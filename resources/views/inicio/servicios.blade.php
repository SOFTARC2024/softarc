@extends('layouts.plantilla')

@section('eleccion')
    <a href="{{ route('inicio.index') }}" class="nav-item nav-link">Inicio</a>
    <a href="{{ route('inicio.nosotros') }}" class="nav-item nav-link">Nosotros</a>
    <a href="{{ route('inicio.servicios') }}" class="nav-item nav-link active">Servicios</a>
    <a href="{{ route('inicio.asociados') }}" class="nav-item nav-link">Asociados</a>
    <a href="{{ route('inicio.contacto') }}" class="nav-item nav-link">Contacto</a>
    <a href="{{ route('login') }}" class="nav-item nav-link">Iniciar Sesión</a>
@endsection()

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header2 mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Servicios</h1>
        <div class="d-inline-flex mb-lg-5">
            <p class="m-0 text-white"><a class="text-white" href="{{ route('inicio.index') }}">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Servicios</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestros servicios</h4>
            <h1 class="display-4">Tecnologia informática</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{ asset('imagenes/carrusel2.png') }}" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h5><i class="fa fa-laptop service-icon"></i>Desarrollo de Software</h5>
                        <p class="m-0">En nuestro equipo de desarrollo de software, nos enorgullece abordar desafíos 
                            complejos y encontrar soluciones elegantes y efectivas. Trabajamos en estrecha colaboración 
                            con nuestros clientes para comprender sus necesidades y objetivos, y luego utilizamos nuestra 
                            experiencia y creatividad para desarrollar software que supere sus expectativas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{ asset('imagenes/bg1.png') }}" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h5><i class="fa fa-comment service-icon"></i>Consultaría informática</h5>
                        <p class="m-0">En nuestro equipo de consultoría informática, estamos dedicados a ayudar a las empresas 
                            a navegar por el panorama tecnológico en constante cambio y a encontrar soluciones que se adapten 
                            perfectamente a sus necesidades y objetivos empresariales.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{ asset('imagenes/bg3.png') }}" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h5><i class="fa fa-award service-icon"></i>Capacitaciones de TI</h5>
                        <p class="m-0">En nuestro programa de capacitaciones en TI, nos comprometemos a proporcionar a nuestros 
                            estudiantes las habilidades y conocimientos necesarios para sobresalir en el mundo digital de hoy. 
                            Ya sea que estén interesados en el desarrollo de software, la seguridad cibernética, la gestión de 
                            datos o cualquier otra área de TI, ofrecemos una amplia gama de cursos diseñados para satisfacer sus 
                            necesidades.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="{{ asset('imagenes/bg4.png') }}"
                            alt="">
                    </div>
                    <div class="col-sm-7">
                        <h5><i class="fa fa-chart-bar service-icon"></i>Marketing Digital</h5>
                        <p class="m-0">En nuestro equipo de marketing digital, nos dedicamos a ayudar a las empresas a aprovechar 
                            al máximo las oportunidades que ofrece el mundo digital. Desde la optimización de sitios web para 
                            mejorar el posicionamiento en los motores de búsqueda hasta la creación de estrategias de contenido 
                            que atraigan y retengan a la audiencia, estamos aquí para ayudarte a alcanzar tus objetivos de 
                            marketing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
    
@endsection()
