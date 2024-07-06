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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Patente</th>
                            <th>estado</th>
                            <th>Precio Arriendo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    @foreach ($vehiculos as  $vehiculo)
                    <tr>
                        <td>{{$vehiculo->marca }}</td>
                        <td>{{$vehiculo->modelo }}</td>
                        <td>{{$vehiculo->anio}}</td>
                        <td>{{$vehiculo->patente }}</td>
                        <td>{{$vehiculo->estado }}</td>
                        <td>{{$vehiculo->precio}}</td>
                        <td>
                            <form method="POST" action="{{ route('vehiculos.destroy', $vehiculo->patente) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Eliminar">
                                    <span class="material-icons">delete</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
                                <h5 class="card-title">Nuevo Vehiculo</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo Vehiculo? Presione el botón para dirigirse al formulario y agregar el nuevo vehiculo.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('vehiculos.create') }}" class="btn btn-success">Agregar</a>
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
   
    