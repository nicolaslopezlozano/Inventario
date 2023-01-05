<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    //
    protected $table = 'costos';

    protected $fillable = [
        'produccion_id', 'precio', 'cantidad','proveedor_id'
    ];
}
