@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Gestión de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition shadow-sm">
        Registrar Nuevo Alumno
    </a>
</div>

<div class="bg-white shadow-sm border border-gray-200 rounded-lg overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-50">
            <tr class="border-b border-gray-200">
                <th class="p-3 text-sm font-bold text-gray-600 uppercase">Código</th>
                <th class="p-3 text-sm font-bold text-gray-600 uppercase">Nombre</th>
                <th class="p-3 text-sm font-bold text-gray-600 uppercase">Carrera</th>
                <th class="p-3 text-sm font-bold text-gray-600 uppercase">Sexo</th>
                <th class="p-3 text-sm font-bold text-gray-600 uppercase text-center">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($alumnos as $alumno)
            <tr class="hover:bg-gray-50 transition-colors">
                <td class="p-3 text-sm font-mono text-indigo-600">{{ $alumno->codigo }}</td>
                <td class="p-3 text-sm text-gray-900 font-medium">{{ $alumno->nombre }}</td>
                <td class="p-3 text-sm text-gray-600">{{ $alumno->carrera }}</td>
                <td class="p-3 text-sm">
                    <span class="px-2 py-1 rounded text-xs font-semibold {{ $alumno->sexo == 'F' ? 'bg-pink-100 text-pink-700' : 'bg-blue-100 text-blue-700' }}">
                        {{ $alumno->sexo_texto }}
                    </span>
                </td>
                <td class="p-3 text-sm text-center">
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="text-blue-600 hover:underline">Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminarlo?')">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection