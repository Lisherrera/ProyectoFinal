
@extends('templates.master')
@section('contenido_principal')

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Perfil</th>
                            <th>Administrador</th>
                            <th>Ejecutivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Liss</td>
                            <td>Herrera</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Benjamin</td>
                            <td>Ortega</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Topher</td>
                            <td>Pereira</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>vicente</td>
                            <td>Lorca</td>
                            <td>
                                <button class="btn btn-warning btn-edit text-white"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger btn-delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
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
                                <h5 class="card-title">Nuevo Perfil</h5>
                                <hr>
                                <p class="card-text">¿Desea agregar un nuevo usuario? Presione el botón para dirigirse al formulario y agregar el nuevo usuario.</p>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-success" href="">Agregar</button>
                                </div>
                                <!-- <button type="button" class="btn btn-primary end">Agregar</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
@endsection