@extends ('layout.admin')

@section ('content')
<div class="container mx-auto p-4 py-8">
<h1 class="text-2xl font-bold mb-6">Lista de Usuarios</h1>
<a href="#" class="mb-4 inline-block bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Crear Usuario</a>

<div class="bg-white shadow rounded-lg p-6 mb-4">
        <table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b">ID</th>
            <th class="px-4 py-2 border-b">Nombre</th>
            <th class="px-4 py-2 border-b">Email</th>
            <th class="px-4 py-2 border-b">Tipo</th>
            <th class="px-4 py-2 border-b">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td class="px-4 py-2 border-b">{{ $usuario->id }}</td>
            <td class="px-4 py-2 border-b">{{ $usuario->nombre }}</td>
            <td class="px-4 py-2 border-b">{{ $usuario->email }}</td>
            <td class="px-4 py-2 border-b">{{ $usuario->user_type }}</td>
            <td class="px-4 py-2 border-b">
                <a href="#" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">Editar</a>
                <form action="#" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="ml-2 bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection