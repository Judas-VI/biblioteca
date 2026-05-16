@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    
    <div class="flex flex-col sm:flex-row justify-between items-center border-b pb-4 mb-6 gap-4">
        <div>
            <h1 class="text-2xl font-extrabold text-gray-900">Módulo de Profesores</h1>
        </div>
        <a href="{{ route('profesores.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm font-bold shadow transition flex items-center gap-1">
            ➕ Registrar Profesor
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-100 text-gray-700 uppercase text-xs tracking-wider">
                    <th class="p-3 border-b">Código</th>
                    <th class="p-3 border-b">Nombre Completo</th>
                    <th class="p-3 border-b">Departamento</th>
                    <th class="p-3 border-b">Sexo</th>
                    <th class="p-3 border-b text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-600 divide-y divide-gray-100">
                @foreach($profesores as $profesor)
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-3 font-mono text-indigo-600 font-semibold">{{ $profesor->codigo }}</td>
                    <td class="p-3 font-medium text-gray-900">{{ $profesor->nombre }}</td>
                    <td class="p-3">{{ $profesor->departamento }}</td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs font-semibold {{ $profesor->sexo == 'F' ? 'bg-pink-100 text-pink-700' : 'bg-blue-100 text-blue-700' }}">
                            {{ $profesor->sexo == 'F' ? 'Femenino' : 'Masculino' }}
                        </span>
                    </td>
                    
                    <td class="p-3 flex justify-center gap-4">
                        <a href="{{ route('profesores.show', $profesor->codigo) }}" class="text-blue-600 hover:underline font-medium">Ver</a>
                        <a href="{{ route('profesores.edit', $profesor->codigo) }}" class="text-yellow-600 hover:underline font-medium">Editar</a>
                        
                        <form action="{{ route('profesores.destroy', $profesor->codigo) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar a este profesor?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline font-medium">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition">
            &larr; Volver al Panel de Control
        </a>
    </div>

</div>
@endsection