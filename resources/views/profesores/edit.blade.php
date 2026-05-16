@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-3xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-extrabold text-gray-900">Editar Profesor</h1>
        <a href="{{ route('profesores.index') }}" class="text-indigo-600 hover:underline font-medium text-sm">
            &larr; Volver a la lista
        </a>
    </div>

    <form action="{{ route('profesores.update', $profesor->codigo) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Código</label>
                <input type="text" name="codigo" value="{{ $profesor->codigo }}" class="mt-1 w-full p-2 border border-gray-200 bg-gray-50 text-gray-500 rounded-md font-mono" readonly>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                <input type="text" name="nombre" value="{{ $profesor->nombre }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Departamento</label>
                <input type="text" name="departamento" value="{{ $profesor->departamento }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" name="correo" value="{{ $profesor->correo }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div class="sm:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Dirección</label>
                <input type="text" name="direccion" value="{{ $profesor->direccion }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input type="text" name="telefono" value="{{ $profesor->telefono }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Sexo</label>
                <select name="sexo" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="M" {{ $profesor->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ $profesor->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" value="{{ $profesor->fecha_nacimiento }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-md shadow transition">
                Actualizar Profesor
            </button>
        </div>
    </form>
</div>
@endsection