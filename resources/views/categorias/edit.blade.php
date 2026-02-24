@extends('layout.admin')
@section ('content')
<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Editar Categoría</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre de la Categoría:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Actualizar Categoría</button>
                <a href="{{ route('categorias.index') }}" class="text-gray-600 hover:text-gray-800">Cancelar</a>
            </div>
        </form>
    </div>


@endsection 