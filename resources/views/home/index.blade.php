@extends('templates.master')
@section('contenido_principal')
     <!-- card -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Vehiculos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{asset('images/autos.jpg')}}" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="{{route('vehiculos.index')}}" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Arriendos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{asset('images/contrato.jpg')}}" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="{{route('arriendos.index')}}" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Clientes</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{asset('images/clientes.jpg')}}" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="{{route('clientes.index')}}" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3 mt-3">
                <div class="card">
                    <div class="card-body"> 
                        <h4 class="card-title">Tipos de Vehiculos</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{asset('images/tipo.jpg')}}" class="img-fluid rounded" style="max-height: 200px;">
                        </div>
                        <a href="{{route('tipos.index')}}" class="btn btn-primary">Entrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card -->
@endsection