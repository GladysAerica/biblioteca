@extends('layout.admin')

@section('content')



<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Categorías</h1>

    <a href="{{ route('categorias.create') }}" class="mb-4 inline-block bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Crear Nueva Categoría</a>

    

    <div class="bg-white shadow rounded-lg p-6">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> 

@endsection