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
                            <h5 class="card-title">Ingresar Nuevo Arriendo</h5>
                            <hr>
                            <form action="{{ route('arriendos.store') }}" method="POST">
                                @csrf <!-- Token de seguridad de Laravel -->
                                <div class="container my-3">
                                    <div class="row align-items-center mt-1">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="nombre" class="form-label mx-2">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="apellido" class="form-label mx-2">Apellido</label>
                                            <input type="text" id="apellido" name="apellido" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mt-1">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="rut" class="form-label mx-2">Rut</label>
                                            <input type="text" id="rut" name="rut" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="email" class="form-label mx-2">Email vendedor</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="tipo" class="form-label mx-2">Tipo</label>
                                            <input type="text" id="tipo" name="tipo" class="form-control" required>
                                        </div>            
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inpFechaI" class="form-label mx-2">Fecha Inicio</label>
                                            <input type="date" id="fechaI" name="fechaI" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputFechaT" class="form-label mx-2">Fecha Término</label>
                                            <input type="date" id="fechaT" name="fechaT" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- contenido form -->
                                    <!-- botones -->            
                                    <div class="row">
                                        <div class="d-flex justify-content-end align-items m-2">
                                            <button type="reset" class="btn btn-danger mx-3">Cancelar</button>
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- botones -->            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
