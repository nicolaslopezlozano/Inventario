<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    //
    protected $table = 'produccion';

    protected $fillable = [
        'cantidad', 'fecha', 'precio_produccion', 'producto_id'
    ];

}
