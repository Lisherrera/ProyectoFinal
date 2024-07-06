<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class Vehiculo extends Model
{
    use HasFactory,SoftDeletes;

    //nombre de la tabla
    protected $table = 'vehiculos';
    protected $primaryKey = 'patente';
    public $incrementing = false; 
    protected $keyType = 'string';

    //relacion con tipo
    public function tipo():BelongsTo{
        return $this->belongsTo(Tipo::class);
    }
}
