@extends('layouts.plantilla')

@section('eleccion')
    <a href="{{ route('inicio.index') }}" class="nav-item nav-link active">Inicio</a>
    <a href="{{ route('inicio.nosotros') }}" class="nav-item nav-link">Nosotros</a>
    <a href="{{ route('inicio.servicios') }}" class="nav-item nav-link">Servicios</a>
    <a href="{{ route('inicio.asociados') }}" class="nav-item nav-link">Asociados</a>
    <a href="{{ route('inicio.contacto') }}" class="nav-item nav-link">Contacto</a>
    <a href="{{ route('login') }}" class="nav-item nav-link">Iniciar Sesión</a>
@endsection()

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('imagenes/carrusel3.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">DESARROLLO</h2>
                        <h1 class="display-1 text-white m-0">SOFTWARE</h1>
                        <div class="col-lg-4 py-0 py-lg-5">
                            <p>Desarrollamos soluciones tecnológicas de alto impacto 
                                optimizando procesos y generando oportunidades reales de crecimiento en nuestros clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('imagenes/bg2.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">CONSULTORÍA</h2>
                        <h1 class="display-1 text-white m-0">INFORMATICA</h1>
                        <div class="col-lg-4 py-0 py-lg-5">
                            <p>Realizamos una evaluación y replanteamos los procesos actuales, 
                                para crear nuevas oportunidades de crecimiento enfocados en transformación digital.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('imagenes/carrusel2.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">MARKETING</h2>
                        <h1 class="display-1 text-white m-0">DIGITAL</h1>
                        <div class="col-lg-4 py-0 py-lg-5">
                            <p>Implementamos estrategias integrales de comunicación y gestionamos 
                                distintas plataformas digitales enfocados en superar los objetivos de tu compañía.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
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


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">50% de Descuento</h1>
            <h1 class="text-white mb-3">Oferta Especial</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Desde el 1 de Mayo hasta el 31 de Julio del 2024</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Correo Electrónico" style="height: 60px; width: 500px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->


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


    <!-- Reservation Start -->
    <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">50% de Descuento</h1>
                                <h1 class="text-white">Para reserva en línea</h1>
                            </div>
                            <p class="text-white">¡No esperes más! Estos descuentos son por tiempo limitado, 
                                así que contáctanos hoy mismo para aprovechar estas ofertas especiales y llevar 
                                tu negocio al siguiente nivel con tecnología de primer nivel a precios increíbles.</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Desarrollo de Software
                                </li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Consultoría informática
                                </li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Marketing Digital
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="text-center p-4" style="background: rgba(0, 0, 0, 0.5);">
                            <h1 class="text-white mb-4 mt-5">Reserva tu Descuento</h1>
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4"
                                        placeholder="RUC o DNI" required="required" />
                                </div>
                                
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                            placeholder="Razon Social" data-target="#date" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                            placeholder="Nombres y Apellidos del Representante" data-target="#time" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent border-primary p-4"
                                        placeholder="Correo Electrónico" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Reservar Ahora</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestros</h4>
                <h1 class="display-4">Clientes</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{ asset('imagenes/SIMBOLO.png') }}" alt="">
                        <div class="ml-3">
                            <h4>Despegatec Perú</h4>
                            <i>Tienda de Monitores</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{ asset('imagenes/SIMBOLO.png') }}" alt="">
                        <div class="ml-3">
                            <h4>Etnabsa</h4>
                            <i>Empresa de Transporte</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{ asset('imagenes/SIMBOLO.png') }}" alt="">
                        <div class="ml-3">
                            <h4>Contratistas hidraulicos</h4>
                            <i>Empresa minera</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{ asset('imagenes/SIMBOLO.png') }}" alt="">
                        <div class="ml-3">
                            <h4>Suministros de computo</h4>
                            <i>Tienda de TI</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection()
