@extends('layout.admin')

@section('content')
<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Seleccionar Libro</h1>

    <div class = "bg-white shadow rounded-lg p-6 mt-4">
         <div class =mt-6>
                <h2 class="text-xl font-bold mb-4">Usuario:</h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <P><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>

        <form action="{{ route('prestamos.store') }}" method="POST">
            @csrf
            <label for ="libro_id" class="block text-gray-700 font-medium mb-2">Libro:</label>
            <select name="libro_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                <option value="">Seleccione un libro</option>
                @foreach ($libros as $libro)
                    <option value="{{ $libro->id }}">{{ $libro->nombre }} - {{ $libro->autor }}</option>
                @endforeach
            </select>
            <input type="hidden" name="usuario_id" value="{{ $usuario->id }}">

            <div class="flex items-center justify-between mt-4">
                <input type="submit" value="Prestar" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                <a href="{{ route('prestamos.index') }}" class="text-gray-600 hover:text-gray-800">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection