<?php
 
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;
 
Route::get('/',      [UsuarioController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuarioController::class, 'login'])->name('login.post');
 

Route::middleware('auth.session')->group(function () {
 
    Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('empleados', EmpleadoController::class);
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('profesores', ProfesorController::class);
    Route::resource('libros', LibroController::class);
});