<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arriendos de Vehiculos</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css') }}">
    @yield('hojas-estilo')
</head>

<body style="background-color:  #A6D0D2;">
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #08628D;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home.index')}}">Arriendos ku-chow!  
            @auth
            <small class="text-white">{{ Auth::user()->nombre }} ({{ Auth::user()->nombrePerfil() }})</small>
            @endauth
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" href="{{route('home.index')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='vehiculos.index' || Route::current()->getName()=='vehiculos.create') active @endif" href="{{route('vehiculos.index')}}">Vehiculos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='arriendos.index'|| Route::current()->getName()=='arriendos.create')active @endif" href="{{route('arriendos.index')}}">Arriendos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='clientes.index'|| Route::current()->getName()=='clientes.create')active @endif" href="{{route('clientes.index')}}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='tipos.index'|| Route::current()->getName()=='tipos.create')active @endif" href="{{route('tipos.index')}}">Tipos de Vehiculos</a>
                    </li>
                    @if(Gate::allows('usuarios-gestion'))
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='usuarios.index'|| Route::current()->getName()=='usuarios.create')active @endif" href="{{route('usuarios.index')}}">Gestion de Usuarios</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link @if(Route::current()->getName()=='usuarios.contrasena')active @endif" href="{{route('usuarios.contrasena')}}">Cambiar contraseña</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('usuarios.logout')}}">Cerrar Sesión</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ver Perfiles</a></li>
                            <li><a class="dropdown-item" href="#">Crear Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Editar</a></li>
                            <li><a class="dropdown-item" href="#">Borrar</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- nav -->
     <!-- card -->
    <div class="container-fluid">
        @yield('contenido_principal')
    </div>
    <!-- card -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>