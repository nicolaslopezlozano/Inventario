<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'producto';

    protected $fillable = [
        'nombre_producto'
    ];
}
