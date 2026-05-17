@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto bg-white p-8 rounded-lg border shadow-sm">
    
    {{-- Encabezado con título, contador y botón de registro --}}
    <div class="flex justify-between items-center mb-6 pb-4 border-b">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 inline-flex items-center gap-2">
                Gestión de Profesores
            </h1>
        </div>
        <a href="{{ route('profesores.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded text-sm font-bold hover:bg-indigo-700 transition shadow-sm">
            + Registrar profesor
        </a>
    </div>

    {{-- Estado vacío --}}
    @if(empty($profesores))
        <p class="text-gray-400 text-center py-8">No hay profesores registrados aún.</p>
    @else
        {{-- Contenedor de la Tabla Responsiva --}}
        <div class="overflow-x-auto border rounded-lg">
            <table class="w-full text-left border-collapse bg-white">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="p-3 text-sm font-semibold text-gray-700">Código</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Nombre</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Dirección</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Teléfono</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Sexo</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Fecha nac.</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Departamento</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Correo</th>
                        <th class="p-3 text-sm font-semibold text-gray-700 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($profesores as $profesor)
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="p-3 text-sm font-mono text-indigo-600">{{ $profesor->codigo }}</td>
                        <td class="p-3 text-sm font-medium text-gray-900">{{ $profesor->nombre }}</td>
                        <td class="p-3 text-sm text-gray-600">{{ $profesor->direccion }}</td>
                        <td class="p-3 text-sm text-gray-600">{{ $profesor->telefono }}</td>
                        <td class="p-3 text-sm">
                            <span class="px-2 py-1 rounded text-xs font-semibold {{ $profesor->sexo == 'F' ? 'bg-pink-100 text-pink-700' : 'bg-blue-100 text-blue-700' }}">
                                {{ $profesor->sexo == 'F' ? 'Femenino' : 'Masculino' }}
                            </span>
                        </td>
                        {{-- Formateo directo de fecha por seguridad con SQL nativo --}}
                        <td class="p-3 text-sm text-gray-600">
                            {{ $profesor->fecha_nacimiento ? date('d/m/Y', strtotime($profesor->fecha_nacimiento)) : '' }}
                        </td>
                        <td class="p-3 text-sm text-gray-600">{{ $profesor->departamento }}</td>
                        <td class="p-3 text-sm font-mono text-gray-500 text-xs">{{ $profesor->correo }}</td>
                        <td class="p-3 text-sm text-center">
                            <form action="{{ route('profesores.destroy', $profesor->id) }}" method="POST"
                                  onsubmit="return confirm('¿Eliminar al profesor {{ $profesor->nombre }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-semibold hover:underline bg-transparent border-none p-0 cursor-pointer">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection