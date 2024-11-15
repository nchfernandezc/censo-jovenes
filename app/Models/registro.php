<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registro'; 

    protected $fillable = [
        'cedula',
        'nombre',
        'apellido',
        'edad',
        'telefono',
        'email',
        'municipio',
        'parroquia',
        'ocupacion',
        'grado',
        'categoria_p',
        'descripcion_p',
    ];
}
