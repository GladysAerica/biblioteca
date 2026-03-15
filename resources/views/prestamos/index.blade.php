@extends('layout.admin')

@section ('content')

<div class="container mx-auto p-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
        @endif
        
        <a href="{{ route('prestamos.create') }}" class="mb-4 inline-block bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Crea Prestamo</a>

</div> 
<div class="bg-white shadow rounded-lg p-6 mb-4">
        <table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b">ID</th>
            <th class="px-4 py-2 border-b">Libro</th>
            <th class="px-4 py-2 border-b">Usuario</th>
            <th class="px-4 py-2 border-b">Fecha</th>
            <th class="px-4 py-2 border-b">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($prestamos as $prestamo)
        <tr>
            <td class="px-4 py-2 border-b">{{ $prestamo->id }}</td>
            <td class="px-4 py-2 border-b">{{ optional($prestamo->libro)->nombre ?? '—' }}</td> <!--se modifico esto y el de abajo para que me diera el nombre en prestamos -->
            <td class="px-4 py-2 border-b">{{ optional($prestamo->usuario)->name ?? '—' }}</td>
            <td class="px-4 py-2 border-b">{{ $prestamo->created_at->format ('d/m/Y') }}</td>
            <td class="px-4 py-2 border-b "> 
            </td>
            @endforeach
 </tbody>
 </table>
 </div>
@endsection

