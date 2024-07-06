<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Perfil extends Model
{
    use HasFactory;

    //nombre de la tabla
    protected $table = 'perfiles';

    public $timestamps = false;
    
    //relacion 1:N con usuario
    public function usuario():HasMany{
        return $this->hasMany(Usuario::class);
    }

}
