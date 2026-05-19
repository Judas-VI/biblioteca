<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Libro extends Model
{
    protected $table = 'libros';
 
    protected $fillable = [
        'isbn',
        'titulo',
        'autores',
        'editorial',
        'anio_publicacion',
        'num_ejemplar',
    ];
 
    /**
     * Devuelve todos los ejemplares de un mismo ISBN agrupados.
     */
    public static function porIsbn(): \Illuminate\Support\Collection
    {
        return static::orderBy('isbn', 'asc')->orderBy('num_ejemplar', 'asc')->get()
            ->groupBy('isbn');
    }
}
