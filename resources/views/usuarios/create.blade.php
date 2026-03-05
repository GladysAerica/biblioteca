@extends ('layout.admin')

@section('content')
<div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Crear Nuevo Usuario</h1>

    <form action="{{ route('usuarios.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Usuario</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror|
        </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña</label>
                    <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                <label for="user_type" class="block text-gray-700 font-medium mb-2">Tipo de Usuario</label>
                <select name="user_type" id="user_type" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
                @error('user_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Guardar Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">Cancelar</a>
    </form>

@endsection