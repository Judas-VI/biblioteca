@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 max-w-2xl mx-auto mt-6">
    
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-extrabold text-gray-900">Editar Libro</h1>
        <a href="{{ route('libros.index') }}" class="text-green-600 hover:underline font-medium text-sm">
            &larr; Volver al catálogo
        </a>
    </div>

    <form action="{{ route('libros.update', $libro->isbn) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" value="{{ $libro->isbn }}" class="mt-1 w-full p-2 border border-gray-200 bg-gray-50 text-gray-500 rounded-md font-mono" readonly>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Título del Libro</label>
                <input type="text" name="titulo" value="{{ $libro->titulo }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Autor</label>
                <input type="text" name="autor" value="{{ $libro->autor }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Editorial</label>
                <input type="text" name="editorial" value="{{ $libro->editorial }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Año de Publicación</label>
                <input type="number" name="anio_publicacion" value="{{ $libro->anio_publicacion }}" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>
        </div>
        <div>
                <label class="block text-sm font-medium text-gray-700">Número de Ejemplares</label>
                <input type="number" name="numero_ejemplares" value="{{ $libro->numero_ejemplares }}" min="0" class="mt-1 w-full p-2 border border-gray-300 rounded-md focus:ring-green-500 focus:border-green-500" required>
            </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-md shadow transition">
                Actualizar Libro
            </button>
        </div>
    </form>
</div>
@endsection