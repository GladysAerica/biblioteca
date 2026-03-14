@extends('layout.admin')

@section ('content')

<div class="container mx-auto p-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Prestamos</h1>
        
        <a href="{{ route('prestamos.create') }}" class="mb-4 inline-block bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700 transition">Crea Prestamo</a>

</div> 
<div class="bg-white shadow rounded-lg p-6 mb-4">
        <table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="px-4 py-2 border-b">ID</th>
            <th class="px-4 py-2 border-b"></th>
            <th class="px-4 py-2 border-b"></th>
            <th class="px-4 py-2 border-b"></th>
            <th class="px-4 py-2 border-b">Acciones</th>
        </tr>
    </thead>
    <tbody>
 </tbody>
 </table>
 </div>
@endsection

