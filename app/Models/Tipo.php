<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use HasFactory,SoftDeletes;

    //nombre de tabla
    protected $table = 'tipos';
    protected $fillable = ['nombre'];
    public $timestamps = false;
    
    //relacion con vehiculo
    public function vehiculo():HasMany{
        return $this->hasMany(Vehiculo::class);
    }
    
}
