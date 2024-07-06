@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido_principal')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover bg-white">
                    <thead>
                        <tr>
                            
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rut</th>
                            <th>Email</th>
                            <th>Direccion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                        @foreach ($clientes as $cliente)
                        <tr>
                            
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            <td>{{$cliente->rut}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>
                                <form method="POST" action="{{ route('clientes.destroy', $cliente->rut) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Eliminar">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>
                            </td>
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
                                <h5 class="card-title">Nuevo Cliente</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo cliente? Presione el botón para dirigirse al formulario y agregar el nuevo cliente.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar Cliente</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
        
@endsection