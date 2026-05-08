<?php
 
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
 
// ── Rutas públicas (sin sesión) ────────────────────────────────────────────────
 
// Paso 6 - Login
/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',      [UsuarioController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuarioController::class, 'login'])->name('login.post');
 
// ── Rutas protegidas (requieren sesión activa) ─────────────────────────────────
Route::middleware('auth.session')->group(function () {
 
    // Paso 11 - Logout
    Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');
 
    // Paso 7 - Dashboard / ventana principal
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
    // Pasos 8, 9, 10 - CRUD Empleados
    // GET    /empleados           → index   (consulta general)
    // GET    /empleados/create    → create  (formulario registrar)
    // POST   /empleados           → store   (guardar nuevo)
    // GET    /empleados/{id}      → show    (consulta individual)
    // GET    /empleados/{id}/edit → edit    (formulario cambiar)
    // PUT    /empleados/{id}      → update  (guardar cambios)
    // DELETE /empleados/{id}      → destroy (eliminar)
    Route::resource('empleados', EmpleadoController::class);
});