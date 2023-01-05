<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoCompra extends Model
{
    protected $table = 'carrito';

    protected $fillable = [
        'cantidad', 
        'fecha', 
        'inventario_id', 
        'costo_transporte_id',
        'usuario_id',
    ];
}
