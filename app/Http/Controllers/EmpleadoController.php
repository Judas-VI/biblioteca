<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    /**
     * Paso 10 - Consulta general: muestra todos los empleados en tabla.
     * SQL embebido equivalente:
     *   SELECT * FROM empleados ORDER BY codigo ASC
     */
    public function index()
    {
        //$empleados = Empleado::orderBy('codigo')->get();
        $empleados = DB::select('SELECT id, codigo, nombre, turno FROM empleados ORDER BY codigo ASC');

        return view('empleados.index', compact('empleados'));
    }

    /**
     * Paso 8 y 9 - Muestra el formulario para registrar un empleado.
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Paso 8 y 9 - Guarda el nuevo empleado en la BD.
     * SQL embebido equivalente:
     *   INSERT INTO empleados (codigo, nombre, direccion, telefono, sexo, fecha_nacimiento, turno)
     *   VALUES (?, ?, ?, ?, ?, ?, ?)
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo'           => 'required|integer|unique:empleados,codigo',
            'nombre'           => 'required|string|max:100',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
            'turno'            => 'required|in:Matutino,Vespertino,Nocturno',
        ], [
            'codigo.unique'    => 'Ya existe un empleado con ese código.',
            'sexo.in'          => 'El sexo debe ser M o F.',
            'turno.in'         => 'El turno debe ser Matutino, Vespertino o Nocturno.',
        ]);

        $codigo    = $request->input('codigo');
        $nombre    = $request->input('nombre');
        $direccion = $request->input('direccion');
        $telefono  = $request->input('telefono');
        $sexo      = $request->input('sexo');
        $fecha     = $request->input('fecha_nacimiento');
        $turno     = $request->input('turno');

        DB::insert(
            'insert into empleados (codigo, nombre, direccion, telefono, sexo, fecha_nacimiento, turno, created_at, updated_at) 
                values (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())',
            [
                $codigo,
                $nombre,
                $direccion,
                $telefono,
                $sexo,
                $fecha,
                $turno
            ]
        );
        //Empleado::create($request->all());

        return redirect()
            ->route('empleados.index')
            ->with('exito', 'Empleado registrado correctamente.');
    }

    /**
     * Consulta individual - muestra los datos de un empleado.
     * SQL embebido equivalente:
     *   SELECT * FROM empleados WHERE id = ? LIMIT 1
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    /**
     * Muestra el formulario para editar un empleado (Paso 8 - opción "cambiar").
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Actualiza los datos de un empleado en la BD.
     * SQL embebido equivalente:
     *   UPDATE empleados SET nombre=?, direccion=?, ... WHERE id=?
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'codigo'           => 'required|integer|unique:empleados,codigo,' . $empleado->id,
            'nombre'           => 'required|string|max:100',
            'direccion'        => 'required|string|max:150',
            'telefono'         => 'required|string|max:20',
            'sexo'             => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
            'turno'            => 'required|in:Matutino,Vespertino,Nocturno',
        ]);

        $empleado->update($request->all());

        return redirect()
            ->route('empleados.index')
            ->with('exito', 'Empleado actualizado correctamente.');
    }

    /**
     * Elimina un empleado de la BD (Paso 8 - opción "eliminar").
     * SQL embebido equivalente:
     *   DELETE FROM empleados WHERE id = ?
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()
            ->route('empleados.index')
            ->with('exito', 'Empleado eliminado correctamente.');
    }
}
