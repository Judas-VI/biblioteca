<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = DB::select('SELECT * FROM libros ORDER BY isbn ASC');
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn'             => 'required|string|max:30',
            'titulo'           => 'required|string|max:200',
            'autores'          => 'required|string|max:200',
            'editorial'        => 'required|string|max:100',
            'anio_publicacion' => 'required|integer|min:1000|max:9999',
            'num_ejemplar'     => 'required|integer|min:1',
        ], [
            'anio_publicacion.integer' => 'El año debe ser un número válido.',
        ]);
 
        // Verifica unicidad ISBN + num_ejemplar
        $existe = Libro::where('isbn', $request->isbn)->where('num_ejemplar', $request->num_ejemplar)->exists();
 
        if ($existe) {
            return back()
                ->withInput()
                ->withErrors(['num_ejemplar' => 'Ya existe ese ejemplar para este ISBN.']);
        }
 
        Libro::create($request->all());
 
        return redirect()
            ->route('libros.index')
            ->with('exito', 'Libro/ejemplar registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()
            ->route('libros.index')
            ->with('exito', 'Ejemplar eliminado correctamente.');
    }
}
