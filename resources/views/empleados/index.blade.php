@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Gestión de Empleados</h1>
    <a href="{{ route('empleados.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">Registrar Nuevo</a>
</div>

<div class="bg-white shadow-sm border rounded-lg overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-50">
            <tr>
                <th class="p-3 border-b font-bold">Código</th>
                <th class="p-3 border-b font-bold">Nombre</th>
                <th class="p-3 border-b font-bold">Turno</th>
                <th class="p-3 border-b font-bold text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $emp)
            <tr class="hover:bg-gray-50">
                <td class="p-3 border-b">{{ $emp->codigo }}</td>
                <td class="p-3 border-b">{{ $emp->nombre }}</td>
                <td class="p-3 border-b">
                    <span class="px-2 py-1 rounded text-xs {{ $emp->turno == 'Matutino' ? 'bg-yellow-100 text-yellow-800' : ($emp->turno == 'Vespertino' ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800') }}">
                        {{ $emp->turno }}
                    </span>
                </td>
                <td class="p-3 border-b text-center flex justify-center gap-4">
                    <a href="{{ route('empleados.show', $emp->id) }}" class="text-blue-600 hover:underline text-sm">Ver</a>
                    <a href="{{ route('empleados.edit', $emp->id) }}" class="text-yellow-600 hover:underline text-sm">Editar</a>
                    <form action="{{ route('empleados.destroy', $emp->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminarlo?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline text-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection