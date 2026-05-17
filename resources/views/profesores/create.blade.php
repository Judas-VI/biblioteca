@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg border shadow-sm">
    <h1 class="text-2xl font-bold mb-6">Registrar Profesor</h1>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-50 border border-red-200 text-red-700 rounded text-sm">
            @foreach ($errors->all() as $error)
                <div>• {{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            
            <div class="mb-4">
                <label class="block text-sm font-medium">Código *</label>
                <input type="text" name="codigo" value="{{ old('codigo') }}" placeholder="Ej: 2314686" class="w-full border p-2 rounded" required>
                @error('codigo')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Nombre completo *</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Apellidos Nombre" class="w-full border p-2 rounded" required>
                @error('nombre')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4 col-span-2">
                <label class="block text-sm font-medium">Dirección *</label>
                <input type="text" name="direccion" value="{{ old('direccion') }}" placeholder="Av. y número" class="w-full border p-2 rounded" required>
                @error('direccion')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Teléfono *</label>
                <input type="text" name="telefono" value="{{ old('telefono') }}" placeholder="10 dígitos" class="w-full border p-2 rounded" required>
                @error('telefono')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Sexo *</label>
                <select name="sexo" class="w-full border p-2 rounded" required>
                    <option value="">-- Seleccionar --</option>
                    <option value="M" {{ old('sexo') === 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ old('sexo') === 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
                @error('sexo')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Fecha de nacimiento *</label>
                <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="w-full border p-2 rounded" required>
                @error('fecha_nacimiento')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Departamento *</label>
                <input type="text" name="departamento" value="{{ old('departamento') }}" placeholder="Ej: Ciencias Computacionales" class="w-full border p-2 rounded" required>
                @error('departamento')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-4 col-span-2">
                <label class="block text-sm font-medium">Correo *</label>
                <input type="email" name="correo" value="{{ old('correo') }}" placeholder="usuario@academicos.udg.mx" class="w-full border p-2 rounded" required>
                @error('correo')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
            </div>

        </div>

        <div class="mt-6">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded font-bold hover:bg-indigo-700 transition">Guardar profesor</button>
            <a href="{{ route('profesores.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection