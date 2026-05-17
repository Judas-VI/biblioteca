@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-2xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-extrabold text-gray-900">Detalles del Libro</h1>
        <div class="flex gap-3">
            <a href="{{ route('libros.edit', $libro->isbn) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                ✏️ Editar
            </a>
            <a href="{{ route('libros.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md text-sm font-bold shadow-sm transition">
                &larr; Volver
            </a>
        </div>
    </div>

    <div class="space-y-6 text-gray-700">
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">ISBN</p>
            <p class="text-lg font-medium text-green-600 font-mono">{{ $libro->isbn }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Título</p>
            <p class="text-xl font-bold text-gray-900">{{ $libro->titulo }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Editorial</p>
            <p class="text-lg font-medium">{{ $libro->editorial }}</p>
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-400 uppercase tracking-wide">Año de Publicación</p>
            <p class="text-lg font-medium">{{ $libro->anio_publicacion }}</p>
        </div>
    </div>
</div>
@endsection