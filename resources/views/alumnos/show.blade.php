@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-3xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-extrabold text-gray-900">Detalles del Alumno</h1>
        <div class="flex gap-3">
            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                ✏️ Editar
            </a>
            <a href="{{ route('alumnos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                &larr; Volver
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-gray-700">
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Código</p>
            <p class="text-lg font-medium text-indigo-600">{{ $alumno->codigo }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Nombre Completo</p>
            <p class="text-lg font-medium">{{ $alumno->nombre }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Carrera</p>
            <p class="text-lg font-medium">{{ $alumno->carrera }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Correo Electrónico</p>
            <p class="text-lg font-medium">{{ $alumno->correo }}</p>
        </div>
        <div class="sm:col-span-2">
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Dirección</p>
            <p class="text-lg font-medium">{{ $alumno->direccion }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Teléfono</p>
            <p class="text-lg font-medium">{{ $alumno->telefono }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Sexo</p>
            <p class="text-lg font-medium">{{ $alumno->sexo == 'M' ? 'Masculino' : 'Femenino' }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Fecha de Nacimiento</p>
            <p class="text-lg font-medium">{{ $alumno->fecha_nacimiento }}</p>
        </div>
    </div>
</div>
@endsection