@extends ('layout.admin')

@section('content')
<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Eliminación de Usuario</h1>
    <p class="mb-4 ">¿Estás seguro de que deseas eliminar al usuario</p>
    <div class="bg-white shadow rounded-lg p-6 mb-4">
        

        <table class="min-w-full table-auto mb-4">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Nombre</th>
                    <th class="px-4 py-2 border-b">Email</th>
                    <th class="px-4 py-2 border-b">Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
                    <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>   
                </tr>
            </tbody>
        </table>

        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition">Sí, eliminar</button>
            <a href="{{ route('usuarios.index') }}" class="ml-2 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">No, cancelar</a>
        </form>
    </div>
@endsection
