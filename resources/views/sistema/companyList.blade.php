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
                <h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Administración <small>EMPRESA</small>
                </h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        <div class="container-fluid">
            <ul class="breadcrumb breadcrumb-tabs">
                <li>
                    <a href="{{route('sistema.company')}}" class="btn btn-info">
                        <i class="zmdi zmdi-plus"></i> &nbsp; NUEVA EMPRESA
                    </a>
                </li>
                <li>
                    <a href="{{route('sistema.companyList')}}" class="btn btn-success">
                        <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE EMPRESAS
                    </a>
                </li>
            </ul>
        </div>

        <!-- panel lista de empresas -->
        <div class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE EMPRESAS</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">CÓDIGO DE REGISTRO</th>
                                    <th class="text-center">NOMBRE</th>
                                    <th class="text-center">RUC</th>
                                    <th class="text-center">EMAIL</th>
                                    <th class="text-center">ACTUALIZAR</th>
                                    <th class="text-center">ELIMINAR</th>
                                </tr>
                            </thead>
                            @foreach ($empresas as $empresas)
                            <tbody>
                                <tr>
                                    <td>{{$empresas->id}}</td>
                                    <td>{{$empresas->nombre}}</td>
                                    <td>{{$empresas->ruc}}</td>
                                    <td>{{$empresas->email}}</td>
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
                            {{-- <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1243567890</td>
                                    <td>EL SALVADOR</td>
                                    <td>bibliotecasv@gmail.com</td>
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
                                <tr>
                                    <td>2</td>
                                    <td>9876543212</td>
                                    <td>EE.UU</td>
                                    <td>bibliotecaeeuu@gmail.com</td>
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
                            </tbody> --}}
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
