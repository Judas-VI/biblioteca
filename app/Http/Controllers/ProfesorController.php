<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Muestra el listado general de profesores.
     * SQL: SELECT * FROM profesores ORDER BY nombre ASC
     */
    public function index()
    {
        // Traemos todos los profesores ordenados por nombre
        $profesores = Profesor::orderBy('nombre', 'asc')->get();
        
        return view('profesores.index', compact('profesores'));
    }

    /**
     * Muestra el formulario para registrar un nuevo profesor.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Almacena el nuevo profesor en la base de datos.
     */
    public function store(Request $request)
    {
        // Validamos que los datos cumplan con las reglas de tu tabla
        $request->validate([
            'codigo'           => 'required|string|max:20|unique:profesores,codigo',
            'nombre'           => 'required|string|max:150',
            'departamento'     => 'required|string|max:100',
            'correo'           => 'required|email|max:100|unique:profesores,correo',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
        ], [
            // Mensajes de error personalizados para llaves únicas
            'codigo.unique' => 'Ya existe un profesor registrado con este código.',
            'correo.unique' => 'Este correo electrónico ya está en uso.',
        ]);

        // Guardamos el registro de forma masiva usando el $fillable de tu modelo
        Profesor::create($request->all());

        return redirect()
            ->route('profesores.index')
            ->with('exito', 'Profesor registrado correctamente.');
    }

    /**
     * Muestra la información detallada de un profesor específico.
     */
    public function show($codigo)
    {
        // Al ser la PK 'codigo', findOrFail buscará automáticamente por esa columna
        $profesor = Profesor::findOrFail($codigo);
        
        return view('profesores.show', compact('profesor'));
    }

    /**
     * Muestra el formulario para editar los datos de un profesor.
     */
    public function edit($codigo)
    {
        $profesor = Profesor::findOrFail($codigo);
        
        return view('profesores.edit', compact('profesor'));
    }

    /**
     * Actualiza los cambios del profesor en la base de datos.
     */
    public function update(Request $request, $codigo)
    {
        // Buscamos al profesor antes de validar para poder ignorar su propio registro en las reglas 'unique'
        $profesor = Profesor::findOrFail($codigo);

        $request->validate([
            'nombre'           => 'required|string|max:150',
            'departamento'     => 'required|string|max:100',
            // El tercer parámetro de unique sirve para ignorar el registro actual y que no marque error al guardar el mismo correo
            'correo'           => 'required|email|max:100|unique:profesores,correo,' . $codigo . ',codigo',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
        ]);

        // Aplicamos los cambios recibidos del formulario
        $profesor->update($request->all());

        return redirect()
            ->route('profesores.index')
            ->with('exito', 'Datos del profesor actualizados correctamente.');
    }

    /**
     * Elimina a un profesor del sistema.
     */
    public function destroy($codigo)
    {
        $profesor = Profesor::findOrFail($codigo);
        $profesor->delete();

        return redirect()
            ->route('profesores.index')
            ->with('exito', 'Profesor eliminado correctamente.');
    }
}