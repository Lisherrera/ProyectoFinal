@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido_principal')
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-8">
            <div class="card" style="width: 100%; max-width: 500px;">
                <div class="row">
                    <div class="col">
                    <div class="card-body">
                            <h5 class="card-title">Nuevo Tipo de Vehiculo</h5>
                            <hr>
                            <form method="POST" action="{{route('tipos.store')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                                    @error('nombre')
                                    <div id="nombreFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="d-flex justify-content-end align-items">
                                        <button type="reset" class="btn btn-danger mx-3" href="">Cancelar</button>
                                        <button type="submit" class="btn btn-success" href="">Agregar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
