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
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">ID</th>
                    <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Nombre</th>
                    <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($categorias as $categoria)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $categoria->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $categoria->nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap"> 
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
            
    </div>
</div> 

@endsection