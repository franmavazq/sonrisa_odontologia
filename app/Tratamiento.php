<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = [
        'id','id_cita','tipo','descripcion', 'cantidad'
    ];
}
