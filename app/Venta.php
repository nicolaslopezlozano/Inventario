<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';

    protected $fillable = [
        'cantidad', 'precio', 'fecha', 'usuario_id'
    ];
}
