<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'name', 'tipo', 'descripcion', 'id_cliente'
    ];
}
