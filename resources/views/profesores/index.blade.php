@extends('layouts.app')

@section('content')
<div class="bg-white p-10 rounded-xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-extrabold text-gray-900">Módulo de Profesores</h1>
    <p class="text-gray-500 mt-2">Seleccione una opción del menú de profesores.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mt-10">

        <a href="#" class="border p-6 rounded-lg hover:shadow-md transition bg-white">
            <h3 class="font-bold text-lg text-indigo-700">Registrar</h3>
            <p class="text-sm text-gray-500 mt-2">Dar de alta un profesor.</p>
        </a>

        <a href="#" class="border p-6 rounded-lg hover:shadow-md transition bg-white">
            <h3 class="font-bold text-lg text-indigo-700">Consulta individual</h3>
            <p class="text-sm text-gray-500 mt-2">Buscar un profesor específico.</p>
        </a>

        <a href="#" class="border p-6 rounded-lg hover:shadow-md transition bg-white">
            <h3 class="font-bold text-lg text-indigo-700">Consulta general</h3>
            <p class="text-sm text-gray-500 mt-2">Ver listado de profesores.</p>
        </a>

        <a href="#" class="border p-6 rounded-lg hover:shadow-md transition bg-white">
            <h3 class="font-bold text-lg text-indigo-700">Cambiar</h3>
            <p class="text-sm text-gray-500 mt-2">Modificar datos del profesor.</p>
        </a>

        <a href="#" class="border p-6 rounded-lg hover:shadow-md transition bg-white">
            <h3 class="font-bold text-lg text-red-600">Eliminar</h3>
            <p class="text-sm text-gray-500 mt-2">Eliminar un profesor.</p>
        </a>

    </div>

    <div class="mt-8">
        <a href="{{ route('dashboard') }}" class="text-indigo-600 font-semibold hover:underline">
            ← Volver al panel
        </a>
    </div>
</div>
@endsection