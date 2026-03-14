@extends ('layout.admin')
@section('content')
<div class="container mx-auto p-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Crear Prestamo</h1>
        
        <div class="bg-white shadow rounded-lg p-6 mb-4">
            <form action="{{ route('prestamos.buscar_usuario') }}" method="POST">
                @csrf
                <label for="usuario_id" class="block text-gray-700 font-medium mb-2">ID Usuario:</label>
                <input type= "text" name= "usuario_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">
                <label for="usuario_nombre" class="block text-gray-700 font-medium mb-2">Nombre Usuario: </label>
                <input type= "text" name= "usuario_nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300">

                <div class="flex items-center justify-between mt-4">
                    <input type="submit" value="Buscar" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                    <a href="{{ route('prestamos.index') }}" class="text-gray-600 hover:text-gray-800">Cancelar</a>
                </div>
            </form>

            @isset($usuario)
            <div class =mt-6>
                <h2 class="text-xl font-bold mb-4">Usuario Encontrado</h2>
                <p><strong>ID:</strong> {{ $usuario->id }}</p>
                <p><strong>Nombre:</strong> {{ $usuario->name }}</p>
                <P><strong>Email:</strong> {{ $usuario->email }}</p>
            </div>
            @endisset
        </div>
    </div>
 </div>
@endsection