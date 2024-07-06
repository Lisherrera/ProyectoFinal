<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Arriendo extends Model
{
    use HasFactory, SoftDeletes;
    
    //nombre de la tabla
    protected $table = 'arriendos';
    
    //relacion con usuario
    public function usuario():BelongsTo{
        return $this->belongsTo(Usuario::class);
    }

    //relacion con vehiculo
    public function vehiculo():BelongsToMany{
        return $this->belongsToMany(Vehiculo::class);
    }

    //relacion con cliente
    public function cliente():BelongsTo{
        return $this->belongsTo(Cliente::class);
    }


}
