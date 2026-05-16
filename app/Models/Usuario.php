<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
 
class Usuario extends Model
{
    protected $table = 'usuarios';
 
    protected $fillable = [
        'nombre_del_usuario',
        'contrasena',
        'rol',
    ];
 
    protected $hidden = [
        'contrasena',
    ];
 
    /**
     * Verifica si la contraseña ingresada coincide con la almacenada.
     */
    public function verificarContrasena(string $contrasena): bool
    {
        return Hash::check($contrasena, $this->contrasena);
    }
}