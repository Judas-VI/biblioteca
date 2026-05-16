<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class VerificarRol
{
    /**
     * Maneja la solicitud entrante.
     */
    public function handle(Request $request, Closure $next, string $rolRequerido): Response
    {
        // 1. Verificamos si hay un usuario con sesión activa
        if (!Session::has('usuario')) {
            return redirect()->route('login')->withErrors(['credenciales' => 'Debes iniciar sesión primero.']);
        }

        // 2. Extraemos el rol del usuario desde el array de la sesión
        $rolUsuario = Session::get('usuario.rol');

        // 3. Si el rol del usuario no coincide con el rol requerido, lo mandamos al dashboard con un error
        if ($rolUsuario !== $rolRequerido) {
            return redirect()->route('dashboard')->with('error', 'No tienes permisos para acceder a esta sección.');
        }

        return $next($request);
    }
}