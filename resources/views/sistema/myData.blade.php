@extends('layouts.S_plantilla')

@section('content')
@foreach ($empleados as $empleados)
@endforeach
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
                <h1 class="text-titles"><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i> MIS DATOS</small></h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora
                voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed,
                dignissimos possimus!</p>
        </div>

        <!-- Panel mis datos -->
        <div class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="zmdi zmdi-refresh"></i> &nbsp; MIS DATOS</h3>
                </div>
                <div class="panel-body">
                    <form>
                        <fieldset>
                            <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">DNI: 
                                                
                                                    <?php
                                                        if($users->id == $empleados->id){
                                                            echo $empleados->dni;
                                                        }
                                                    ?>
                                                
                                            </label>
                                            <input pattern="[0-9-]{1,30}" class="form-control" type="text" name="dni-up"
                                                required="" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">NOMBRES Y APELLIDOS: 
                                                    <?php
                                                        if($users->id == $empleados->id){
                                                            echo $empleados->nombre;
                                                        }
                                                    ?>
                                            </label>
                                            <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text"
                                                name="nombre-up" required="" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">TELÉFONO: 
                                                    <?php
                                                        if($users->id == $empleados->id){
                                                            echo $empleados->telefono;
                                                        }
                                                    ?>
                                            </label>
                                            <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text"
                                                name="apellido-up" required="" maxlength="30">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">EMAIL: 
                                                    <?php
                                                        if($users->id == $empleados->id){
                                                            echo $empleados->email;
                                                        }
                                                    ?>
                                            </label>
                                            <input pattern="[0-9+]{1,15}" class="form-control" type="text"
                                                name="telefono-up" maxlength="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <p class="text-center" style="margin-top: 20px;">
                            <button type="submit" class="btn btn-success btn-raised btn-sm"><i
                                    class="zmdi zmdi-refresh"></i> Actualizar</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>
    
@endsection()
