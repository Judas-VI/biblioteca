<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Empleado extends Model
{
    protected $table = 'empleados';
 
    protected $fillable = [
        'codigo',
        'nombre',
        'direccion',
        'telefono',
        'sexo',
        'fecha_nacimiento',
        'turno',
    ];
 
    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];
 
    /**
     * Devuelve el sexo como texto legible.
     */
    public function getSexoTextoAttribute(): string
    {
        return $this->sexo === 'F' ? 'Femenino' : 'Masculino';
    }
 
    /**
     * Devuelve la fecha de nacimiento formateada en español.
     */
    public function getFechaFormateadaAttribute(): string
    {
        return $this->fecha_nacimiento->format('d/m/Y');
    }
}