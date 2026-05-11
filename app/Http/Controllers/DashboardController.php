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
        // 1. Verificar si la sesión existe
        if (!Session::has('usuario')) {
            // 2. Si no existe, redirigir a la ruta del login con un mensaje flash
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder al sistema.');
        }

        // 3. Si existe, obtener el usuario y mostrar la vista
        $usuario = Session::get('usuario');

        return view('dashboard.index', [
            'nombreUsuario' => $usuario['nombre'],
        ]);
    }
}