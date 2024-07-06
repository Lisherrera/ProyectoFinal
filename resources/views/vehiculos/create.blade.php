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
                            <h5 class="card-title">Ingresar Nuevo Vehiculo</h5>
                            <hr>
                            <div class="container">
                                <form method="POST" action="{{ route('vehiculos.store') }}">
                                    @csrf
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputMarca" class="form-label mx-2">Marca</label>
                                            <input type="text" id="inputMarca" name="marca" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputModelo" class="form-label mx-2">Tipo</label>
                                            <input type="text" id="inputModelo" name="modelo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputAnio" class="form-label mx-3">Año</label>
                                            <input type="text" id="inputAnio" name="anio" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputPatente" class="form-label mx-2">Patente</label>
                                            <input type="text" id="inputPatente" name="patente" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputPrecio" class="form-label mx-2">Precio</label>
                                            <input type="text" id="inputPrecio" name="precio" class="form-control">
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="inputEstado" class="form-label mx-2">Estado</label>
                                            <select id="inputEstado" name="estado" class="form-control">
                                                <option value="0">Seleccione</option>
                                                <option value="disponible">Disponible</option>
                                                <option value="arrendado">Arrendado</option>
                                                <option value="en mantenimiento">En Mantenimiento</option>
                                                <option value="de baja">De Baja</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="d-flex justify-content-end align-items">
                                            <button type="reset" class="btn btn-danger mx-3">Cancelar</button>
                                            <button type="submit" class="btn btn-success text-white">Agregar</button>
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
</div>
@endsection
