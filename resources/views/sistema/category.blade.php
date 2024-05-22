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
                <h1 class="text-titles"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Administración <small>CATEORÍAS</small>
                </h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        <div class="container-fluid">
            <ul class="breadcrumb breadcrumb-tabs">
                <li>
                    <a href="{{route('sistema.category')}}" class="btn btn-info">
                        <i class="zmdi zmdi-plus"></i> &nbsp; NUEVA CATEORÍA
                    </a>
                </li>
                <li>
                    <a href="{{route('sistema.categoryList')}}" class="btn btn-success">
                        <i class="zmdi zmdi-format-list-bulleted"></i> &nbsp; LISTA DE CATEORÍAS
                    </a>
                </li>
            </ul>
        </div>

        <!-- Panel nueva categoria -->
        <div class="container-fluid">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVA CATEORÍA</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <fieldset>
                            <legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Información de la categoría</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Código *</label>
                                            <input pattern="[0-9]{1,7}" class="form-control" type="text"
                                                name="codigo-reg" required="" maxlength="7">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre *</label>
                                            <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text"
                                                name="nombre-reg" required="" maxlength="30">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>
                                Guardar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection()
