@extends('templates.master')

@section('contenido_principal')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Listado de Arriendos</h5>
                            <hr>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Arriendo</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Rut</th>
                                        <th>Email Vendedor</th>
                                        <th>Tipo</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Término</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($arriendos as $arriendo)
                                        <tr>
                                            <td>{{ $arriendo->id }}</td>
                                            <td>{{ $arriendo->nombre }}</td>
                                            <td>{{ $arriendo->apellido }}</td>
                                            <td>{{ $arriendo->rut }}</td>
                                            <td>{{ $arriendo->email }}</td>
                                            <td>{{ $arriendo->tipo }}</td>
                                            <td>{{ $arriendo->fechaI }}</td>
                                            <td>{{ $arriendo->fechaT }}</td>
                                            <td>
                                                <form action="{{ route('arriendos.destroy', $arriendo->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="{{ route('arriendos.create') }}" class="btn btn-primary">Nuevo Arriendo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
