@extends('templates.master')
@section('contenido_principal')
    <!-- contenido form -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Ingresar Nuevo Usuario</h5>
                            <hr>
                            <form action="{{ route('usuarios.store') }}" method="POST">
                                @csrf <!-- Token de seguridad de Laravel -->
                                <div class="container my-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="nombre" class="form-label mx-2">Nombre</label>
                                            <input type="text" id="nombre" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}">
                                            @error('nombre')
                                            <div id="nombreFeedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="password" class="form-label mx-2">Contraseña</label>
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                            @error('password')
                                            <div id="passwordFeedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="email" class="form-label mx-2">Email</label>
                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                            @error('email')
                                            <div id="emailFeedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <label class="form-check-label" for="activo">Activo</label>
                                                <input class="form-check-input mx-2 @error('activo') is-invalid @enderror" type="checkbox" id="activo" name="activo" value="1">
                                                @error('activo')
                                                <div id="activoFeedback" class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-sm-12 mb-3 d-flex align-items-center">
                                            <label for="perfil" class="form-label mx-2">Perfil</label>
                                            <select id="perfil" name="perfil" class="form-control @error('perfil') is-invalid @enderror">
                                                <option value="0">Seleccione</option>
                                                @foreach($perfiles as $perfil)
                                                <option value="{{$perfil->id}}" @if(old('perfil')==$perfil->id) selected @endif>{{ $perfil->nombre }}</option>
                                                @endforeach
                                            </select>
                                            @error('perfil')
                                            <div id="perfilFeedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <!-- botones -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div class="d-flex justify-content-end align-items">
                                            <button type="reset" class="btn btn-danger mx-3">Cancelar</button>
                                            <button type="submit" class="btn btn-success">Agregar</button>
                                        </div>
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
<!-- contenido form -->
    
@endsection
