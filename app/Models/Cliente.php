<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cliente extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'rut';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;
    
    //relacion con arriendo
    public function arriendo():HasMany{
        return $this->hasMany(Arriendo::class);
    }
}
