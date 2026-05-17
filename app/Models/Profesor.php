<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Profesor extends Model
{
    protected $table = 'profesores';
 
    protected $fillable = [
        'codigo',
        'nombre',
        'direccion',
        'telefono',
        'sexo',
        'fecha_nacimiento',
        'departamento',
        'correo',
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
