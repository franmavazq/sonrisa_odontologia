<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'id', 'id_cliente', 'id_cita', 'id_tratamiento',
        'tipo', 'descripcion', 'monto'
    ];
}
