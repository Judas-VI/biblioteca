<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;

// ── Rutas públicas (Sin sesión) ────────────────────────────────────────────────

Route::get('/',       [UsuarioController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuarioController::class, 'login'])->name('login.post');


// ── Rutas protegidas (Requieren sesión activa) ─────────────────────────────────

Route::middleware('auth.session')->group(function () {

    // Paso 11 - Cerrar Sesión
    Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');

    // Paso 7 - Panel Principal (Cualquier usuario con sesión puede ver el Dashboard)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // SOLO ADMINISTRADORES
    Route::middleware('rol:Administrador')->group(function () {
        
        // ── MÓDULO DE ALUMNOS ──────────────────────────────────────────────────────
        Route::get('/alumnos',              [AlumnoController::class, 'index'])->name('alumnos.index');
        Route::get('/alumnos/create',       [AlumnoController::class, 'create'])->name('alumnos.create');
        Route::post('/alumnos',             [AlumnoController::class, 'store'])->name('alumnos.store');
        Route::get('/alumnos/{codigo}',     [AlumnoController::class, 'show'])->name('alumnos.show');
        Route::get('/alumnos/{codigo}/editHtml', [AlumnoController::class, 'edit'])->name('alumnos.edit');
        Route::put('/alumnos/{codigo}',     [AlumnoController::class, 'update'])->name('alumnos.update');
        Route::delete('/alumnos/{codigo}',  [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

        // ── MÓDULO DE EMPLEADOS ────────────────────────────────────────────────────
        Route::resource('empleados', EmpleadoController::class);

        // ── MÓDULO DE PROFESORES ───────────────────────────────────────────────────
        Route::get('/profesores',             [ProfesorController::class, 'index'])->name('profesores.index');
        Route::get('/profesores/create',      [ProfesorController::class, 'create'])->name('profesores.create');
        Route::post('/profesores',            [ProfesorController::class, 'store'])->name('profesores.store');
        Route::get('/profesores/{codigo}',    [ProfesorController::class, 'show'])->name('profesores.show');
        Route::get('/profesores/{codigo}/edit', [ProfesorController::class, 'edit'])->name('profesores.edit');
        Route::put('/profesores/{codigo}',    [ProfesorController::class, 'update'])->name('profesores.update');
        Route::delete('/profesores/{codigo}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');
        
    });


    // SOLO EMPLEADOS
    Route::middleware('rol:Empleado')->group(function () {
        
        // ── MÓDULO DE LIBROS ───────────────────────────────────────────────────────
        Route::get('/libros',             [\App\Http\Controllers\LibroController::class, 'index'])->name('libros.index');
        Route::get('/libros/create',      [\App\Http\Controllers\LibroController::class, 'create'])->name('libros.create');
        Route::post('/libros',            [\App\Http\Controllers\LibroController::class, 'store'])->name('libros.store');
        Route::get('/libros/{isbn}',      [\App\Http\Controllers\LibroController::class, 'show'])->name('libros.show');
        Route::get('/libros/{isbn}/edit', [\App\Http\Controllers\LibroController::class, 'edit'])->name('libros.edit');
        Route::put('/libros/{isbn}',      [\App\Http\Controllers\LibroController::class, 'update'])->name('libros.update');
        Route::delete('/libros/{isbn}',   [\App\Http\Controllers\LibroController::class, 'destroy'])->name('libros.destroy');
        
    });

});