@extends('layout.admin')
@section('content')

<!-- Contenido principal -->
            <main class="flex-1 p-5 md:p-8">
                <div id="content">
                    <!-- Sección de bienvenida -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Bienvenido al Panel de Administración</h2>
                        <p class="text-gray-600">Gestiona los recursos de la biblioteca desde esta interfaz.</p>
                    </section>
                    
                    <!-- Tarjetas de resumen -->
                    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Libros totales</p>
                                    <p class="text-2xl font-bold">2,548</p>
                                </div>
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-book text-blue-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-up mr-1"></i> 5.2%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Préstamos activos</p>
                                    <p class="text-2xl font-bold">187</p>
                                </div>
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exchange-alt text-green-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-red-600 text-sm font-medium"><i class="fas fa-arrow-down mr-1"></i> 2.3%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Usuarios registrados</p>
                                    <p class="text-2xl font-bold">523</p>
                                </div>
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-users text-purple-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-up mr-1"></i> 8.7%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500 text-sm">Libros vencidos</p>
                                    <p class="text-2xl font-bold">14</p>
                                </div>
                                <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="text-green-600 text-sm font-medium"><i class="fas fa-arrow-down mr-1"></i> 12.5%</span>
                                <span class="text-gray-500 text-sm ml-2">este mes</span>
                            </div>
                        </div>
                    </section>

                    <!-- Tabla de préstamos recientes -->
                    <section class="bg-white rounded-lg shadow p-9">
                        <div class="flex  justify-between items-center">
                            <h2 class="text-xl font-bold text-gray-800">Listas de Libros</h2>
                            <a href="{{ route('libros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                <i class="fas fa-plus mr-2"></i> Nuevo Libro
                            </a>
                        </div>

<!--
                        <div class="flex  justify-between items-center">
                            <h2 class="text-xl font-bold text-gray-800">Listas de Libros</h2>
                            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                                Agregar Libro
                            </a>
                            <button class="text-blue-600 hover:text-blue-800 font-medium">Ver todos</button>
                        </div>
     
 -->

                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Nombre</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">ISBN</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Autor</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Editorial</th>
                                        <th class="py-3 px-4 font-semibold text-gray-700">Categoria</th>
                                    </tr>
                                </thead>
                                <tbody class="border-t hover:bg-gray-50">
                                    @foreach ($libros as $libro) 
                                    <tr>
                                        <td class="py-3 px-4">{{ $libro->nombre }}</td> 
                                        <td class="py-3 px-4">{{ $libro->isbn }}</td>
                                        <td class="py-3 px-4">{{ $libro->autor }}</td>
                                        
                                        <td class="py-3 px-4">{{ $libro->editorial }}</td>
                                        <td class="py-3 px-4">{{ $libro->categoria->nombre }}</td>


                                        <td class = "px-4 py-3 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('libros.edit', $libro->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                            <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Eliminar</button>
                                            </form>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </section>

                    
                </div>
            </main>
        </div>
@endsection