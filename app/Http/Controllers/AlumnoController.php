<?php
 
namespace App\Http\Controllers;
 
use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class AlumnoController extends Controller
{
    /**
     * Paso 6 - Consulta general: lista todos los alumnos en tabla.
     * SQL: SELECT * FROM alumnos ORDER BY codigo ASC
     */
    public function index()
    {
        // Instrucción SQL empotrada para la consulta general
        $alumnos = DB::select("SELECT * FROM alumnos ORDER BY nombre ASC");

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
 
        DB::insert(
            "INSERT INTO alumnos (codigo, nombre, carrera, correo, direccion, telefono, sexo, fecha_nacimiento, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())",
            [
                $request->input('codigo'),
                $request->input('nombre'),
                $request->input('carrera'),
                $request->input('correo'),
                $request->input('direccion'),
                $request->input('telefono'),
                $request->input('sexo'),
                $request->input('fecha_nacimiento')
            ]
        );
 
        return redirect()
            ->route('alumnos.index')
            ->with('exito', 'Alumno registrado correctamente.');
    }
 
    public function destroy(Alumno $alumno)
    {
        // Instrucción SQL empotrada para la eliminación
        DB::delete("DELETE FROM alumnos WHERE id = ?", [$alumno->id]);

        return redirect()
            ->route('alumnos.index')
            ->with('exito', 'Alumno eliminado correctamente.');
    }
}
