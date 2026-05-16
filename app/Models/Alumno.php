<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Alumno extends Model
{
    protected $table = 'alumnos';
 
    protected $fillable = [
        'codigo',
        'nombre',
        'carrera',
        'correo',
        'direccion',
        'telefono',
        'sexo',
        'fecha_nacimiento',
    ];
 
    protected $casts = [
        'fecha_nacimiento' => 'date',
    ];
 
    public function getSexoTextoAttribute(): string
    {
        return $this->sexo === 'F' ? 'Femenino' : 'Masculino';
    }
 
    public function getFechaFormateadaAttribute(): string
    {
        return $this->fecha_nacimiento->format('d/m/Y');
    }
}