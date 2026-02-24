@extends('layout.admin')

@section('content')



<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Categorías</h1>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

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
                    <td class="px-4 py-2 border-b text-center"> 
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="ml-4 inline-block bg-yellow-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Editar</a>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-2 bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">Eliminar</button>
                </form>
                    </tr>
                @endforeach  
            </tbody>  
        </table>
        <div class="mt-4">
            {{ $categorias->links() }}
            
    </div>
</div> 

@endsection