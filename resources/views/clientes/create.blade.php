@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido_principal')
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Ingresar Nuevo Cliente</h5>
                            <hr>
                            <form method="POST" action="{{ route('clientes.store') }}">
                                @csrf
                                <div class="container my-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="nombre" class="form-label mx-2">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" aria-describedby="nombreHelpInline">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="apellido" class="form-label mx-2">Apellido</label>
                                            <input type="text" id="apellido" name="apellido" class="form-control" aria-describedby="apellidoHelpInline">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="rut" class="form-label mx-2">Rut</label>
                                            <input type="text" id="rut" name="rut" class="form-control" aria-describedby="rutHelpInline">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="email" class="form-label mx-2">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" aria-describedby="emailHelpInline">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="direccion" class="form-label mx-2">Dirección</label>
                                            <input type="text" id="direccion" name="direccion" class="form-control" aria-describedby="direccionHelpInline">
                                        </div>
                                    </div>
                                </div>
                                <!-- contenido form -->
                                <!-- botones -->
                                <div class="row mt-3">
                                    <div class="d-flex justify-content-end align-items">
                                        <button type="reset" class="btn btn-danger mx-3">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                    </div>
                                </div>
                                <!-- botones -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
