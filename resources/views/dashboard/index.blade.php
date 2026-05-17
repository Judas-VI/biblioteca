@extends('layouts.app')
 
@section('content')
<div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
    
    <h1 class="text-3xl font-extrabold text-gray-900 text-center">Panel de Control</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl mb-10 mt-8">
        
        @if(session('usuario.rol') === 'Administrador')

            <a href="{{ route('empleados.index') }}" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Empleados</h3>
            </a>

            <a href="{{ route('alumnos.index') }}" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Alumnos</h3>
            </a>

            <a href="{{ route('profesores.index') }}" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
                <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">Módulo de Profesores</h3>
            </a>

        @elseif(session('usuario.rol') === 'Empleado')

            <a href="{{ route('libros.index') }}" class="group border-2 border-green-600 p-6 rounded-xl text-center hover:bg-green-600 transition duration-300 shadow-sm md:col-span-3 max-w-md mx-auto w-full">
                <h3 class="font-bold text-xl text-green-600 group-hover:text-white transition">📚 Módulo de Libros</h3>
            </a>

        @else
            <div class="bg-red-50 text-red-700 p-4 rounded-lg text-center md:col-span-3 w-full border border-red-200">
                Error: El usuario no cuenta con un rol válido asignado en el sistema.
            </div>
        @endif

    </div>

    <div class="bg-gray-100 p-3 rounded-lg border border-gray-200 w-full max-w-2xl shadow-sm">
        <img src="{{ asset('imagenes/biblioteca.jpg') }}" alt="Biblioteca" class="w-full h-auto object-cover rounded shadow">
    </div>
 
</div>
@endsection