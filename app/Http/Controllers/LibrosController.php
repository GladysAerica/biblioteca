<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Libros;

class LibrosController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('libros.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Crear un nuevo libro
        $libro = new Libros();
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        // Redirigir a la lista de libros con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Libro creado exitosamente.');
    }

    public function edit ($id)
    {
        $libro = Libros::findOrFail($id);
        $categorias = Categoria::all();
        return view('libros.edit', compact('libro', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'autor' => 'required|string|max:255',
            'editorial' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,id',
        ]);

        // Encontrar el libro y actualizar sus datos
        $libro = Libros::findOrFail($id);
        $libro->nombre = $request->nombre;
        $libro->isbn = $request->isbn;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->categoria_id = $request->categoria;
        $libro->save();

        // Redirigir a la lista de libros con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Libro actualizado exitosamente.');
    }
 
    public function destroy ($id)
    {
        $libro = Libros::findOrFail($id);
        $libro->delete();
        return redirect()->route('home')->with('success', 'Libro eliminado exitosamente.');
    }
}
