<?php
 
namespace App\Http\Controllers;
 
use App\Models\Alumno;
use Illuminate\Http\Request;
 
class AlumnoController extends Controller
{
    /**
     * Paso 6 - Consulta general: lista todos los alumnos en tabla.
     * SQL: SELECT * FROM alumnos ORDER BY codigo ASC
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('codigo')->get();
        return view('alumnos.index', compact('alumnos'));
    }
 
    /**
     * Paso 5 - Muestra el formulario para registrar un alumno.
     */
    public function create()
    {
        return view('alumnos.create');
    }
 
    /**
     * Paso 5 - Guarda el nuevo alumno.
     * SQL: INSERT INTO alumnos (codigo, nombre, carrera, correo, direccion, telefono, sexo, fecha_nacimiento)
     *      VALUES (?, ?, ?, ?, ?, ?, ?, ?)
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'           => 'required|string|max:20|unique:alumnos,codigo',
            'nombre'           => 'required|string|max:150',
            'carrera'          => 'required|string|max:50',
            'correo'           => 'required|email|max:100|unique:alumnos,correo',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
        ], [
            'codigo.unique' => 'Ya existe un alumno con ese código.',
            'correo.unique' => 'Ese correo ya está registrado.',
        ]);
 
        Alumno::create($request->all());
 
        return redirect()
            ->route('alumnos.index')
            ->with('exito', 'Alumno registrado correctamente.');
    }
 
    /**
     * Elimina un alumno.
     * SQL: DELETE FROM alumnos WHERE id = ?
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()
            ->route('alumnos.index')
            ->with('exito', 'Alumno eliminado correctamente.');
    }

    // 1. Mostrar la consulta individual de un alumno
    public function show($codigo)
    {
        $alumno = Alumno::findOrFail($codigo);
        return view('alumnos.show', compact('alumno')); 
        // (Deberás crear el archivo resources/views/alumnos/show.blade.php después)
    }

    // 2. Mostrar el formulario para editar
    public function edit($codigo)
    {
        $alumno = Alumno::findOrFail($codigo);
        return view('alumnos.edit', compact('alumno'));
        // (Deberás crear el archivo resources/views/alumnos/edit.blade.php después)
    }
}
