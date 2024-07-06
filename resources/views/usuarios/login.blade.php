<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #A6D0D2">
    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="offset-1 col-10 offset-md-3 col-md-6 d-flex justify-content-center">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mb-3 my-2">
                                <h5 class="card-title mb-3 text-center">Iniciar Sesión</h5>
                                <form method="POST" action="{{ route('usuarios.autenticar') }}"> 
                                    @csrf
                                    <div class="mb-3 ">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="text-start d-grid gap-2 d-lg-block mt-5 my-1">
                                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 d-none d-lg-block text-end">
                                <img src="{{asset('/images/autos2.jpg')}}" class="img-fluid rounded my-3 mx-3" style="max-width: 80%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>