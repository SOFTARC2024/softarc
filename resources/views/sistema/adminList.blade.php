@extends('layouts.S_plantilla')

@section('content')
    <!-- Content page-->
    <section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i style=" 
                                color: white;
                                padding: 8px 15px;
                                text-decoration: none;
                                font-size: 20px;
                                border: 2px solid white;
                                border-radius: 5px;"
                                class="zmdi zmdi-power"></i>
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
                <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuarios <small>ADMINISTRADORES</small>
                </h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        <div class="container-fluid">
            <ul class="breadcrumb breadcrumb-tabs">
                <li>
                    <a href="{{ route('sistema.admin') }}" class="btn btn-info">
                        <i class="zmdi zmdi-plus"></i> &nbsp; NUEVO ADMINISTRADOR
                    </a>
                </li>
                <li>
                    <a href="{{ route('sistema.adminList') }}" class="btn btn-success">
                        <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE ADMINISTRADORES
                    </a>
                </li>
                <li>
                    <a href="{{ route('sistema.adminSearch') }}" class="btn btn-primary">
                        <i class="zmdi zmdi-search"></i> &nbsp; BUSCAR ADMINISTRADOR
                    </a>
                </li>
            </ul>
        </div>

        <!-- Panel listado de administradores -->
        <div class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE ADMINISTRADORES
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">DNI</th>
                                    <th class="text-center">NOMBRES</th>
                                    <th class="text-center">APELLIDOS</th>
                                    <th class="text-center">TELÉFONO</th>
                                    <th class="text-center">A. CUENTA</th>
                                    <th class="text-center">A. DATOS</th>
                                    <th class="text-center">ELIMINAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleados)
                            <tbody>
                                <tr>
                                    <td>{{ $empleados->id }}</td>
                                    <td>{{ $empleados->dni }}</td>
                                    <td>{{ $empleados->nombre }}</td>
                                    <td>{{ $empleados->telefono }}</td>
                                    <td>{{ $empleados->email }}</td>
                                    <td>
                                        <a href="#!" class="btn btn-success btn-raised btn-xs">
                                            <i class="zmdi zmdi-account-add"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-success btn-raised btn-xs">
                                            <i class="zmdi zmdi-refresh"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form>
                                            <button type="submit" class="btn btn-danger btn-raised btn-xs">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="javascript:void(0)">«</a></li>
                            <li class="active"><a href="javascript:void(0)">1</a></li>
                            <li><a href="javascript:void(0)">2</a></li>
                            <li><a href="javascript:void(0)">3</a></li>
                            <li><a href="javascript:void(0)">4</a></li>
                            <li><a href="javascript:void(0)">5</a></li>
                            <li><a href="javascript:void(0)">»</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection()
