@extends('layouts.app')
@section('titulo', 'Registrar Alumno')

@section('content')
<div class="max-w-4xl mx-auto mt-8">
    <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
        
        <div class="mb-8 pb-4 border-b border-gray-100 flex items-center justify-between">
            <div>
                <h2 class="text-2xl font-extrabold text-gray-900">📋 Registrar Nuevo Alumno</h2>
                <p class="text-sm text-gray-500 mt-1">Ingresa los datos correspondientes para dar de alta a un estudiante.</p>
            </div>
            <a href="{{ route('alumnos.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                &larr; Volver a la lista
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8 rounded-r-lg shadow-sm">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-bold text-red-800">Por favor, corrige los siguientes errores:</h3>
                        <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('alumnos.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div>
                    <label for="codigo" class="block text-sm font-bold text-gray-700 mb-1">Código <span class="text-red-500">*</span></label>
                    <input type="text" id="codigo" name="codigo" value="{{ old('codigo') }}" placeholder="" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('codigo') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('codigo')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="nombre" class="block text-sm font-bold text-gray-700 mb-1">Nombre completo <span class="text-red-500">*</span></label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('nombre') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('nombre')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="carrera" class="block text-sm font-bold text-gray-700 mb-1">Carrera <span class="text-red-500">*</span></label>
                    <input type="text" id="carrera" name="carrera" value="{{ old('carrera', 'ICOM') }}" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('carrera') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('carrera')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="correo" class="block text-sm font-bold text-gray-700 mb-1">Correo electrónico <span class="text-red-500">*</span></label>
                    <input type="email" id="correo" name="correo" value="{{ old('correo') }}" placeholder="usuario@alumnos.udg.mx" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('correo') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('correo')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div class="md:col-span-2">
                    <label for="direccion" class="block text-sm font-bold text-gray-700 mb-1">Dirección <span class="text-red-500">*</span></label>
                    <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('direccion') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('direccion')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="telefono" class="block text-sm font-bold text-gray-700 mb-1">Teléfono <span class="text-red-500">*</span></label>
                    <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('telefono') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('telefono')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="sexo" class="block text-sm font-bold text-gray-700 mb-1">Sexo <span class="text-red-500">*</span></label>
                    <select id="sexo" name="sexo" required
                            class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('sexo') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                        <option value="">-- Seleccionar --</option>
                        <option value="M" {{ old('sexo') === 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ old('sexo') === 'F' ? 'selected' : '' }}>Femenino</option>
                    </select>
                    @error('sexo')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="fecha_nacimiento" class="block text-sm font-bold text-gray-700 mb-1">Fecha de nacimiento <span class="text-red-500">*</span></label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required
                           class="w-full px-4 py-2.5 rounded-lg border outline-none transition-all duration-200 focus:ring-2 focus:ring-indigo-500 @error('fecha_nacimiento') border-red-500 bg-red-50 @else border-gray-300 bg-gray-50 focus:bg-white @enderror">
                    @error('fecha_nacimiento')<p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="mt-10 pt-6 border-t border-gray-100 flex flex-col sm:flex-row justify-end gap-3">
                <a href="{{ route('alumnos.index') }}" class="w-full sm:w-auto text-center px-6 py-3 text-sm font-bold text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-4 focus:ring-gray-100 transition-all">
                    Cancelar
                </a>
                <button type="submit" class="w-full sm:w-auto px-6 py-3 text-sm font-bold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-200 shadow-md transition-all">
                    ✔ Guardar alumno
                </button>
            </div>

        </form>
    </div>
</div>
@endsection