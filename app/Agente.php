<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    protected $table = 'agentes';

    public function usuario()
    {
       return $this->hasMany(User::class);
    }
}
