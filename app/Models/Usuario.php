<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuario extends Authenticatable
{
    use HasFactory,SoftDeletes;

    //nombre de la tabla
    protected $table = 'usuarios';
    protected $primaryKey = 'email';
    public $incrementing = false; 
    protected $keyType = 'string'; 
    public $timestamps = false;
    protected $fillable = ['nombre', 'email', 'activo'];

    //relacion con perfil
    public function perfil():BelongsTo{
        return $this->belongsTo(Perfil::class);
    }
    
    //relacion con arriendo
    public function arriendos():HasMany{
        return $this->hasMany(Arriendo::class);
    }
    
    public function nombrePerfil():string{
        return $this->perfil->nombre;
    }
    
    public function esAdministrador():bool{
        return $this->perfil->nombre == 'Administrador';
    }
    public function esEjecutivo():bool{
        return $this->perfil->nombre == 'Ejecutivo';
    }
}
