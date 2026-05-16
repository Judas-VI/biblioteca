<?php
 
namespace App\Http\Controllers;
 
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
 
class UsuarioController extends Controller 
// gestionan la lógica de la aplicación al procesar solicitudes HTTP
// Actúan como intermediarios entre el modelo (datos) y la vista (interfaz)
{
    /**
     * Paso 6 - Muestra el formulario de inicio de sesión.
     */
    public function showLogin()
    {
        // Si ya hay sesión activa, redirige al dashboard
        if (Session::has('usuario')) {
            return redirect()->route('dashboard');
        }
 
        return view('auth.login');
    }
 
    /**
     * Paso 6 - Procesa el inicio de sesión.
     * SQL embebido equivalente:
     * SELECT * FROM usuarios WHERE nombre_del_usuario = ? LIMIT 1
     */
    public function login(Request $request)
    {
        $request->validate([
            'nombre_del_usuario' => 'required|string|max:50',
            'contrasena'         => 'required|string',
        ], [
            'nombre_del_usuario.required' => 'El nombre de usuario es obligatorio.',
            'contrasena.required'         => 'La contraseña es obligatoria.',
        ]);
 
        // Buscar usuario en la BD (Paso 5 - conexión con PostgreSQL)
        $usuario = Usuario::where('nombre_del_usuario', $request->nombre_del_usuario)->first();
 
        if (!$usuario || !Hash::check($request->contrasena, $usuario->contrasena)) {
            return back()
                ->withInput($request->only('nombre_del_usuario'))
                ->withErrors(['credenciales' => 'Usuario o contraseña incorrectos.']);
        }
 
        // Guardar datos del usuario en sesión (Paso 7)
        // Agregamos el 'rol' dentro de la estructura de tu sesión existente
        Session::put('usuario', [
            'id'     => $usuario->id,
            'nombre' => $usuario->nombre_del_usuario,
            'rol'    => $usuario->rol,
        ]);
 
        return redirect()->route('dashboard');
    }
 
    /**
     * Paso 11 - Cierra la sesión y regresa al login.
     */
    public function logout()
    {
        Session::forget('usuario');
        return redirect()->route('login')->with('mensaje', 'Sesión cerrada correctamente.');
    }
}