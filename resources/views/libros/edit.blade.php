@extends('layout.admin')

@section ('content')
 <div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Libro</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('libros.update', $libro->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre del Libro:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $libro->nombre }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
                <input type="text" name="isbn" id="isbn" value="{{ $libro->isbn }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="autor" class="block text-gray-700 font-bold mb-2">Autor:</label>
                <input type="text" name="autor" id="autor" value="{{ $libro->autor }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="editorial" class="block text-gray-700 font-bold mb-2">Editorial:</label>
                <input type="text" name="editorial" id="editorial" value="{{ $libro->editorial }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="categoria" class="block text-gray-700 font-bold mb-2">Categoría:</label>
                <select name="categoria" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    <option value=""></option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $libro->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Actualizar Libro</button>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-800">Cancelar</a>
            </div>
        </form>
    </div>

@endsection 