<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompraProveedor extends Model
{
    //
    protected $table = 'compra_proveedor';

    protected $fillable = [
        'proveedor_id', 'precio'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

}
