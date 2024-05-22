<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFTARC</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('imagenes/SIMBOLO.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('S_css/main.css') }}" rel="stylesheet">

    <!--<script src="https://cdn.tailwindcss.com"></script>-->

    <!-- favicon -->
    <!-- estilos -->

</head>

<body>
    <!-- header -->

    <!-- nav -->

    <!-- SideBar -->
    <section class="full-box cover dashboard-sideBar">
        <div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
        <div class="full-box dashboard-sideBar-ct">
            <!--SideBar Title -->
            <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                SOFTWARE ARCHITEC <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
            </div>
            <!-- SideBar User info -->
            <div class="full-box dashboard-sideBar-UserInfo">
                <figure class="full-box">
                    <img src="{{ asset('S_assets/avatars/AdminMaleAvatar.png') }}" alt="UserIcon">
                    <figcaption class="text-center text-titles">{{$users->name}}</figcaption>
                </figure>
                <ul class="full-box list-unstyled text-center">
                    <li>
                        <a href="{{ route('sistema.myData') }}" title="Mis datos">
                            <i class="zmdi zmdi-account-circle"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sistema.myAccount') }}" title="Mi cuenta">
                            <i class="zmdi zmdi-settings"></i>
                        </a>
                    </li>
<!-- 
                    <li>
                        <a href="#!" title="Salir del sistema" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
                        Authentication 
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            </x-dropdown-link>
                        </form>-->
                    </li>

                </ul>
            </div>
            
            <!-- SideBar Menu -->
            <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                <li>
                    <a href="{{ route('sistema.home') }}">
                        <i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i
                            class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('sistema.company') }}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>
                                Empresas</a>
                        </li>
                        <li>
                            <a href="{{ route('sistema.category') }}"><i class="zmdi zmdi-labels zmdi-hc-fw"></i>
                                Servicios</a>
                        </li>
                        <li>
                            <a href="{{ route('sistema.provider') }}"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>
                                Contratos</a>
                        </li>
                        <li>
                            <a href="{{ route('sistema.book') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i> 
                                Nuevo Servicio</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#!" class="btn-sideBar-SubMenu">
                        <i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i
                            class="zmdi zmdi-caret-down pull-right"></i>
                    </a>
                    <ul class="list-unstyled full-box">
                        <li>
                            <a href="{{ route('sistema.admin') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i>
                                Administradores</a>
                        </li>
                        <li>
                            <a href="{{ route('sistema.client') }}"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>
                                Clientes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('sistema.catalog') }}">
                        <i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
                    </a>
                </li>
            </ul>
        </div>
    </section>

    @yield('content')

    <!-- footer -->

    <!-- script -->
    <!--====== Scripts -->
    <script src="{{ asset('S_js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('S_js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('S_js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('S_js/material.min.js') }}"></script>
    <script src="{{ asset('S_js/ripples.min.js') }}"></script>
    <script src="{{ asset('S_js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('S_js/main.js') }}"></script>
    <script>
        $.material.init();
    </script>
</body>

</html>
