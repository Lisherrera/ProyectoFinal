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
                            <th>Tipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos as $tipo)
                        <tr>
                            <td>{{ $tipo->nombre }}</td>
                            <td>
                                <form method="POST" action="{{ route('tipos.destroy', $tipo->id) }}" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este tipo?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Eliminar">
                                        <span class="material-icons">delete</span>
                                    </button>
                                </form>
                                {{-- Botón para Editar --}}
                                {{-- <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-sm btn-success" data-bs-toggle="tooltip" data-bs-title="Editar">
                                    <span class="material-icons">editar</span>
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Nuevo Tipo de Vehiculo</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo Tipo de Vehiculo? Presione el botón para dirigirse al formulario y agregar el nuevo tipo.</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('tipos.create') }}" class="btn btn-success">Agregar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection


