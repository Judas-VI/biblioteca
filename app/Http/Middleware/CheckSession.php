<?php
// ─── app/Http/Middleware/CheckSession.php ─────────────────────────────────────
// Protege todas las rutas del grupo 'auth.session'.
// Si no hay sesión activa, redirige al login.
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
 
class CheckSession
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Session::has('usuario')) {
            return redirect()->route('login')
                ->withErrors(['sesion' => 'Debes iniciar sesión para acceder.']);
        }
 
        return $next($request);
    }
}
