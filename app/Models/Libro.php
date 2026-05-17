<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';

    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'isbn', 'titulo', 'editorial', 'anio_publicacion', 'autor', 'numero_ejemplares'
    ];
}