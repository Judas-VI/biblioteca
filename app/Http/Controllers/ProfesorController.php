<?php
 
namespace App\Http\Controllers;
 
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    /**
     * Paso 8 - Consulta general: lista todos los profesores.
     * SQL: SELECT * FROM profesores ORDER BY codigo ASC
     */
    public function index()
    {
        $profesores = Profesor::orderBy('codigo')->get();
        return view('profesores.index', compact('profesores'));
    }
 
    /**
     * Paso 7 - Formulario para registrar un profesor.
     */
    public function create()
    {
        return view('profesores.create');
    }
 
    /**
     * Paso 7 - Guarda el nuevo profesor.
     * SQL: INSERT INTO profesores (codigo, nombre, direccion, telefono, sexo, fecha_nacimiento, departamento, correo)
     *      VALUES (?, ?, ?, ?, ?, ?, ?, ?)
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'           => 'required|string|max:20|unique:profesores,codigo',
            'nombre'           => 'required|string|max:150',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
            'departamento'     => 'required|string|max:100',
            'correo'           => 'required|email|max:100|unique:profesores,correo',
        ], [
            'codigo.unique' => 'Ya existe un profesor con ese código.',
            'correo.unique' => 'Ese correo ya está registrado.',
        ]);
 
        DB::insert(
            "INSERT INTO profesores (codigo, nombre, direccion, telefono, sexo, fecha_nacimiento, departamento, correo, created_at, updated_at) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())",
            [
                $request->input('codigo'),
                $request->input('nombre'),
                $request->input('direccion'),
                $request->input('telefono'),
                $request->input('sexo'),
                $request->input('fecha_nacimiento'),
                $request->input('departamento'),
                $request->input('correo')
            ]
        );
 
        return redirect()
            ->route('profesores.index')
            ->with('exito', 'Profesor registrado correctamente.');
    }
 
    /**
     * Elimina un profesor.
     * SQL: DELETE FROM profesores WHERE id = ?
     */
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()
            ->route('profesores.index')
            ->with('exito', 'Profesor eliminado correctamente.');
    }
}
