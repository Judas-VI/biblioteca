@extends('layouts.app')
 
@section('content')
<div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100 flex flex-col items-center">
    
    <h1 class="text-3xl font-extrabold text-gray-900 text-center">Panel de Control</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-2xl mb-10">
        <a href="{{ route('empleados.index') }}" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
            <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">👥 Módulo de Empleados</h3>
            <p class="text-xs text-gray-500 mt-1 group-hover:text-indigo-200 transition">Administrar personal y consultas</p>
        </a>

        <a href="{{ route('alumnos.index') }}" class="group border-2 border-indigo-600 p-6 rounded-xl text-center hover:bg-indigo-600 transition duration-300 shadow-sm">
            <h3 class="font-bold text-xl text-indigo-600 group-hover:text-white transition">🎓 Módulo de Alumnos</h3>
            <p class="text-xs text-gray-500 mt-1 group-hover:text-indigo-200 transition">Registro, control y consultas ICOM</p>
        </a>
    </div>

    <div class="bg-gray-100 p-3 rounded-lg border border-gray-200 w-full max-w-2xl shadow-sm">
        <img src="{{ asset('imagenes/biblioteca.jpg') }}" alt="Biblioteca" class="w-full h-auto object-cover rounded shadow">
    </div>
 
</div>
@endsection