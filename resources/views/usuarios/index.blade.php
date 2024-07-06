@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido_principal')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered bg-white">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Estado</th>
                            <th>Perfil</th>
                            <th>Acciones</th>
                        </tr>
                        
                        @foreach ($usuarios as $num => $usuario)
                        <tr>
                            <td>{{ $num + 1 }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->activo }}</td>
                            <td>{{ $usuario->perfil->nombre }}</td>
                            <td>
                                <form method="POST" action="{{ route('usuarios.destroy', $usuario->email) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Eliminar">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                    </thead>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="row">
                        <!-- <div class="container d-flex justify-content-center align-items-center col-md-4">
                            <img src="./image/computer-science-1331579_640.png" class="img-fluid rounded-start" alt="...">
                        </div> -->
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Nuevo Usuario</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo usuario? Presione el botón para dirigirse al formulario y agregar el nuevo usuario.</p>
                                <div class="d-flex justify-content-end">
                                    <form action="{{ route('usuarios.create') }}" method="GET">
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                    </form>
                                </div>
                                <!-- <button type="button" class="btn btn-primary end">Agregar</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
@endsection