<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::orderBy('titulo', 'asc')->get();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isbn'             => 'required|string|max:20|unique:libros,isbn',
            'titulo'           => 'required|string|max:150',
            'autor'            => 'required|string|max:150',
            'editorial'        => 'required|string|max:100',
            'anio_publicacion' => 'required|integer|digits:4|min:1000|max:' . date('Y'),
            'numero_ejemplares'=> 'required|integer|min:0',
        ], [
            'isbn.unique'      => 'Este ISBN ya se encuentra registrado.',
            'anio_publicacion.digits' => 'El año de publicación debe tener 4 dígitos.',
        ]);

        Libro::create($request->all());

        return redirect()->route('libros.index')->with('exito', 'Libro registrado correctamente.');
    }

    public function show($isbn)
    {
        $libro = Libro::findOrFail($isbn);
        return view('libros.show', compact('libro'));
    }

    public function edit($isbn)
    {
        $libro = Libro::findOrFail($isbn);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $isbn)
    {
        $libro = Libro::findOrFail($isbn);

        $request->validate([
            'titulo'           => 'required|string|max:150',
            'autor'            => 'required|string|max:150',
            'editorial'        => 'required|string|max:100',
            'anio_publicacion' => 'required|integer|digits:4|min:1000|max:' . date('Y'),
            'numero_ejemplares'=> 'required|integer|min:0',
        ]);

        $libro->update($request->all());

        return redirect()->route('libros.index')->with('exito', 'Datos del libro actualizados.');
    }

    public function destroy($isbn)
    {
        $libro = Libro::findOrFail($isbn);
        $libro->delete();

        return redirect()->route('libros.index')->with('exito', 'Libro eliminado correctamente.');
    }
}