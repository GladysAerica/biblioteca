@extends ('layout.admin')

@section('content')

<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Agregar Nuevo Libro</h1>

    <form action="{{ route('libros.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Libro:</label>
            <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="isbn" class="block text-gray-700 font-medium mb-2">ISBN:</label>
            <input type="text" name="isbn" id="isbn" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="autor" class="block text-gray-700 font-medium mb-2">Autor:</label>
            <input type="text" name="autor" id="autor" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="editorial" class="block text-gray-700 font-medium mb-2">Editorial:</label>
            <input type="text" name="editorial" id="editorial" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
        </div>

        <div class="mb-4">
            <label for="categoria" class="block text-gray-700 font-medium mb-2">Categoría:</label>
            <select name="categoria" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            <option value=""></option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
             </select>
        </div>  
    
        <div class ="flex items-center justify-between">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Guardar Libro</button>
        <a href="{{ route('home') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">Cancelar</a>
        </div>
    </form>
   </div> 
   
    
@endsection