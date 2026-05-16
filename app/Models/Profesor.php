<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';

    // 1. Indicar cuál es la llave primaria
    protected $primaryKey = 'codigo';

    // 2. Avisar que NO es un número que se incrementa solo
    public $incrementing = false;

    // 3. Avisar que el tipo de dato de la llave es texto (string)
    protected $keyType = 'string';

    protected $fillable = [
        'codigo', 'nombre', 'departamento', 'correo', 
        'direccion', 'telefono', 'sexo', 'fecha_nacimiento'
    ];
}