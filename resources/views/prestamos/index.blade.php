@extends('layout.admin')

@section ('content')

<div class="container mx-auto p-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Prestamos</h1>

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
        @endif
        
        <a href="{{ route('prestamos.create') }}" class="mb-4 inline-block bg-yellow-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Crea Prestamo</a>

</div> 
<div class="bg-white shadow rounded-lg p-6 mb-4">
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
        <tr>
            <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">ID</th>
            <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Libro</th>
            <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Usuario</th>
            <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Fecha</th>
            <th class="py-6 px-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Acciones</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200"> 
        @foreach($prestamos as $prestamo)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ optional($prestamo->libro)->nombre ?? '—' }}</td> <!--se modifico esto y el de abajo para que me diera el nombre en prestamos -->
            <td class="px-6 py-4 whitespace-nowrap">{{ optional($prestamo->usuario)->name ?? '—' }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $prestamo->created_at->format ('d/m/Y') }}</td>
            <td class="px-6 py-4 whitespace-nowrap"> 
                
            </td>
            @endforeach
    </tbody>
    </table>
    </div>
 </div>
@endsection

