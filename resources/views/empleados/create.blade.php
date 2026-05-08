@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg border shadow-sm">
    <h1 class="text-2xl font-bold mb-6">Registrar Empleado</h1>

    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block text-sm font-medium">Código</label>
                <input type="number" name="codigo" value="{{ old('codigo') }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Dirección</label>
                <input type="text" name="direccion" value="{{ old('direccion') }}" class="w-full border p-2 rounded col-span-2" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Teléfono</label>
                <input type="text" name="telefono" value="{{ old('telefono') }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Sexo</label>
                <select name="sexo" class="w-full border p-2 rounded" required>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Turno</label>
                <select name="turno" class="w-full border p-2 rounded" required>
                    <option value="Matutino">Matutino</option>
                    <option value="Vespertino">Vespertino</option>
                    <option value="Nocturno">Nocturno</option>
                </select>
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded font-bold hover:bg-indigo-700">Guardar Registro</button>
            <a href="{{ route('empleados.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
        </div>
    </form>
</div>
@endsection