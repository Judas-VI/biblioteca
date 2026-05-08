<?php
 
namespace App\Http\Controllers;
 
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
 
class DashboardController extends Controller
{
    /**
     * Paso 7 - Muestra la ventana principal del sistema Biblioteca.
     * Indica el nombre del usuario actualmente logueado.
     */
    public function index()
    {
        $usuario = Session::get('usuario');
 
        return view('dashboard.index', [
            'nombreUsuario' => $usuario['nombre'] ?? 'Invitado',
        ]);
    }
}
