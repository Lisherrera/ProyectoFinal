<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Usuario;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::define('usuarios-gestion',function(Usuario $usuario){
            return $usuario->esAdministrador();
        });

        Gate::define('usuarios-ejecutivo',function(Usuario $usuario){
            return $usuario->esEjecutivo();
        });
    }
}
