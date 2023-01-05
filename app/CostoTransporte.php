<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CostoTransporte extends Model
{
    //
    protected $table = 'costo_transporte';

    protected $fillable = [
        'nombre_ciudad', 'precio'
    ];
}
