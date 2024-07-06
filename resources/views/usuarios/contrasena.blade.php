@extends('templates.master')

@section('contenido_principal')

<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <!-- contraseña actual -->
                        <div class="mb-3">
                            <label for="contrasena_actual">Contraseña Actual</label>
                            <input type="password" class="form-control" id="contrasena_actual" name="contrasena_actual">
                        </div>

                        <!-- contraseña nueva -->
                        <div class="mb-3">
                            <label for="contrasena_nueva">Contraseña Nueva</label>
                            <input type="password" class="form-control" id="contrasena_nueva" name="contrasena_nueva">
                        </div>

                        <!-- confirmar contraseña nueva -->
                        <div class="mb-3">
                            <label for="repetir_contrasena_nueva">Repetir Contraseña Nueva</label>
                            <input type="password" class="form-control" id="repetir_contrasena_nueva" name="repetir_contrasena_nueva">
                        </div>

                        <!-- botones -->
                        <div class="mb-3 text-end">
                            <button type="reset" class="btn btn-danger">Restablecer</button>
                            <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
