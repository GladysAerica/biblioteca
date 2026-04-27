@extends ('layout.admin')
@section('content')
    <div class="container mx-auto p-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Perfil de Usuario</h1>
    
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    
    <form action="{{route('usuarios.update_profile')}}"method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre del Usuario</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $usuario->name) }}" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Guardar Usuario</button>
            <a href="{{ route('home') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">Cancelar</a>
        </div>
    </form>

    <form action="{{route('usuarios.update_password')}}"method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="current_password" class="block text-gray-700 font-medium mb-2">Contraseña Actual</label>
                <input type="password" name="current_password" id="current_password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                @error('current_password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="new_password" class="block text-gray-700 font-medium mb-2">Nueva Contraseña</label>
                <input type="password" name="new_password" id="new_password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                @error('new_password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
        </div>
        <div class="mb-4">
            <label for="new_password_confirmation" class="block text-gray-700 font-medium mb-2">Confirmar Contraseña</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required>
                @error('new_password_confirmation')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Guardar Usuario</button>
            <a href="{{ route('home') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition">Cancelar</a>
        </div>
    </form>
</div>

@endsection