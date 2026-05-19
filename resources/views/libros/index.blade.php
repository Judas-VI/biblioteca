@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto bg-white p-8 rounded-lg border shadow-sm">
    
    {{-- Encabezado con título, contador de libros y botón de registro --}}
    <div class="flex justify-between items-center mb-6 pb-4 border-b">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 inline-flex items-center gap-2">
                Libros registrados
                <span class="text-sm font-normal text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full">
                    {{ count($libros) }} registro(s)
                </span>
            </h1>
        </div>
        <a href="{{ route('libros.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded text-sm font-bold hover:bg-indigo-700 transition shadow-sm">
            + Registrar libro
        </a>
    </div>

    {{-- Estado vacío --}}
    @if(empty($libros))
        <p class="text-gray-400 text-center py-8">No hay libros registrados aún en el sistema.</p>
    @else
        {{-- Contenedor de la Tabla Responsiva --}}
        <div class="overflow-x-auto border rounded-lg">
            <table class="w-full text-left border-collapse bg-white">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th class="p-3 text-sm font-semibold text-gray-700">ISBN</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Título</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Autor(es)</th>
                        <th class="p-3 text-sm font-semibold text-gray-700">Editorial</th>
                        <th class="p-3 text-sm font-semibold text-gray-700 text-center">Año Pub.</th>
                        <th class="p-3 text-sm font-semibold text-gray-700 text-center">Num. Ejemplar</th>
                        <th class="p-3 text-sm font-semibold text-gray-700 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($libros as $libro)
                    <tr class="hover:bg-gray-50/50 transition">
                        {{-- Formato mono para el ISBN --}}
                        <td class="p-3 text-sm font-mono text-indigo-600 whitespace-nowrap">{{ $libro->isbn }}</td>
                        
                        {{-- Título: Muestra solo el inicio (ej. 30 caracteres) y añade '...' --}}
                        <td class="p-3 text-xs font-medium text-gray-900" title="{{ $libro->titulo }}">
                            {{ \Illuminate\Support\Str::limit($libro->titulo, 30, '...') }}
                        </td>

                        {{-- Autor(es): Extrae solo el primer autor antes de la primera coma y añade '...' si hay más --}}
                        <td class="p-3 text-xs text-gray-600" title="{{ $libro->autores }}">
                            @php
                                // Separamos los autores por comas o por la palabra ' y '
                                    $autoresArray = preg_split('/(,|\sy\s)/', $libro->autores);
                                    $primerAutor = trim($autoresArray[0]);
                            @endphp
                            {{ $primerAutor }}@if(count($autoresArray) > 1)...@endif
                        </td>
                        
                        <td class="p-3 text-sm text-gray-600">{{ $libro->editorial }}</td>
                        <td class="p-3 text-sm text-gray-600 text-center">{{ $libro->anio_publicacion }}</td>
                        
                        {{-- Número de ejemplar --}}
                        <td class="p-3 text-sm text-center">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-gray-100 text-gray-700 border">
                                {{ $libro->num_ejemplar }}
                            </span>
                        </td>
                        
                        {{-- Columna de Acciones: Ver, Editar y Eliminar --}}
                        <td class="p-3 text-sm text-center">
                            <div class="flex justify-center items-center gap-3">
                                <a href="{{ route('libros.show', $libro->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold hover:underline">
                                    Ver
                                </a>
                                
                                <a href="{{ route('libros.edit', $libro->id) }}" class="text-yellow-600 hover:text-yellow-700 font-semibold hover:underline">
                                    Editar
                                </a>

                                <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline"
                                      onsubmit="return confirm('¿Seguro que deseas eliminar el ejemplar {{ $libro->num_ejemplar }} del libro: {{ $libro->titulo }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-semibold hover:underline bg-transparent border-none p-0 cursor-pointer">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection