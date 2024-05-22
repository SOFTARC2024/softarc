<!DOCTYPE html>
<html lang="es">

<head>
    <title>Software Architec Perú</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="{{ asset('S_css/main.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('imagenes/SIMBOLO.png') }}">
</head>

<body>
    <div class="full-box login-container cover">
        <form method="POST" action="{{ route('iniciarSesion') }}" autocomplete="off" class="loginForm">
            
            @csrf

            <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
            <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
            <div class="form-group label-floating">
                <label class="control-label" for="email">Email</label>
                <input class="form-control" name="email" id="email" type="text">
                <p class="help-block">Escribe tú nombre de usuario</p>
            </div>
            <div class="form-group label-floating">
                <label class="control-label" for="password">Contraseña</label>
                <input class="form-control" name="password" id="password" type="text">
                <p class="help-block">Escribe tú contraseña</p>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Iniciar sesión" class="btn btn-info" style="color: #FFF;">
            </div>
        </form>
    </div>

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
