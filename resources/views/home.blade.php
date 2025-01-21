<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Página principal</title>
        <!-- meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- FavIcon -->
        <link href="favicon.png" rel="icon" type="image/x-icon">
        <!-- css y js -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilosPrincipal.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1 offset-md-5">
                    <img src='{{asset("imagenes/imagen-letras.png")}}' id="img_logoLetras">
                </div>
                <div class="col-md-2 offset-md-4">
                    <a class="btn btn-outline-danger" id="btn_cerrarSesion" href="{{ url('cerrarSesion')}}">
                        cerrar sesion
                    </a>
                </div>
           </div>
           <br><br>
           <h3>Bienvenido {{$user->name}} 😊</h3>
           <div class="row">
                <div class="col-md-3 offset-md-1">
                    <a href="{{url('actividades/create')}}" class="btn btn-primary" id="btn_aniadir">Añadir</a>
                </div>

                <div class="col-md-3 offset-md-1">
                    <img src='{{asset("imagenes/rueda.png")}}' id="img_rueda">
                </div>

                <div class="col-md-3 offset-md-1">
                    <a href="{{url('actividades')}}" class="btn btn-primary" id="btn_ver">Ver</a>
                </div>
           </div>
        </div>
    </body>
</html>
