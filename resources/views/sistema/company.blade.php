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

        <!-- panel datos de la empresa -->
        <div class="container-fluid">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; DATOS DE LA EMPRESA</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('sistema.company') }}">
                    @csrf
                        <fieldset>
                            <legend><i class="zmdi zmdi-assignment"></i> &nbsp; Datos de la Empresa</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">RUC *</label>
                                            <input pattern="[0-9]{11}" class="form-control" type="text" 
                                                name="empresa_ruc" required="" maxlength="11">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre de la empresa *</label>
                                            <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" type="text" 
                                                name="empresa_nombre" required="" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Teléfono</label>
                                            <input pattern="[0-9+]{1,15}" class="form-control" type="text"
                                                name="empresa_telefono" required="" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">E-mail</label>
                                            <input pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control" type="email" 
                                                name="empresa_email" required="" maxlength="50" >
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Dirección</label>
                                            <input class="form-control" type="text" 
                                                name="empresa_direccion" required="" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripción</label>
                                            <input class="form-control" type="text" 
                                                name="empresa_descripcion" maxlength="200">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend><i class="zmdi zmdi-key"></i> &nbsp; Datos del Cliente</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre y Apellido *</label>
                                            <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text" 
                                                name="cliente_nombre" required="" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">DNI *</label>
                                            <input class="form-control" type="text" 
                                                name="cliente_dni" required="" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Teléfono *</label>
                                            <input class="form-control" type="text" 
                                                name="cliente_telefono" required="" required="" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">E-mail</label>
                                            <input pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control" type="email" 
                                                name="cliente_email" required="" maxlength="50" >
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Nombre de usuario *</label>
                                            <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text" 
                                                name="user_name" required="" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Contraseña *</label>
                                            <input class="form-control" type="password" 
                                                name="user_password1" required="" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Repita la contraseña *</label>
                                            <input class="form-control" type="password" 
                                                name="user_password2" required="" maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">E-mail</label>
                                            <input pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control" type="email" 
                                                name="user_email" required="" maxlength="50" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-info btn-raised btn-sm"><i
                                    class="zmdi zmdi-floppy"></i> Guardar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection()
