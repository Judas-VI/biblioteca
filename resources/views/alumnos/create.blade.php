@extends('layouts.app')
@section('titulo', 'Registrar Alumno')
 
@section('contenido')
<div class="card">
    <div class="card-title">📋 Registrar Alumno</div>
 
    @if ($errors->any())
        <div class="alert alert-error">
            @foreach ($errors->all() as $error)
                <div>• {{ $error }}</div>
            @endforeach
        </div>
    @endif
 
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
 
        <div class="form-row">
            <div class="form-group">
                <label for="codigo">Código *</label>
                <input type="text" id="codigo" name="codigo" class="form-control"
                       value="{{ old('codigo') }}" placeholder="Ej: 2218813479" required>
                @error('codigo')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="nombre">Nombre completo *</label>
                <input type="text" id="nombre" name="nombre" class="form-control"
                       value="{{ old('nombre') }}" placeholder="Apellidos Nombre" required>
                @error('nombre')<div class="field-error">{{ $message }}</div>@enderror
            </div>
        </div>
 
        <div class="form-row">
            <div class="form-group">
                <label for="carrera">Carrera *</label>
                <input type="text" id="carrera" name="carrera" class="form-control"
                       value="{{ old('carrera', 'ICOM') }}" placeholder="Ej: ICOM" required>
                @error('carrera')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="correo">Correo *</label>
                <input type="email" id="correo" name="correo" class="form-control"
                       value="{{ old('correo') }}" placeholder="usuario@alumnos.udg.mx" required>
                @error('correo')<div class="field-error">{{ $message }}</div>@enderror
            </div>
        </div>
 
        <div class="form-row">
            <div class="form-group">
                <label for="direccion">Dirección *</label>
                <input type="text" id="direccion" name="direccion" class="form-control"
                       value="{{ old('direccion') }}" placeholder="Calle y número" required>
                @error('direccion')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono *</label>
                <input type="text" id="telefono" name="telefono" class="form-control"
                       value="{{ old('telefono') }}" placeholder="10 dígitos" required>
                @error('telefono')<div class="field-error">{{ $message }}</div>@enderror
            </div>
        </div>
 
        <div class="form-row">
            <div class="form-group">
                <label for="sexo">Sexo *</label>
                <select id="sexo" name="sexo" class="form-control" required>
                    <option value="">-- Seleccionar --</option>
                    <option value="M" {{ old('sexo') === 'M' ? 'selected' : '' }}>Masculino</option>
                    <option value="F" {{ old('sexo') === 'F' ? 'selected' : '' }}>Femenino</option>
                </select>
                @error('sexo')<div class="field-error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento *</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"
                       value="{{ old('fecha_nacimiento') }}" required>
                @error('fecha_nacimiento')<div class="field-error">{{ $message }}</div>@enderror
            </div>
        </div>
 
        <div style="display:flex; gap:12px; margin-top:1rem;">
            <button type="submit" class="btn btn-success">✔ Guardar alumno</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">← Cancelar</a>
        </div>
    </form>
</div>
@endsection