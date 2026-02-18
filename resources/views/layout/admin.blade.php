<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Digital | Acceso</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>  <!-- CHECARLOOOO- VIDEO 2 -->
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
     <style>
        /* Estilos adicionales para mejorar la experiencia */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-overlay {
            background-color: rgba(0, 0, 0, 0.5);
        }
        .active-menu {
            background-color: #3b82f6;
            color: white;
        }
        .mobile-menu-hidden {
            transform: translateX(-100%);
        }
        @media (min-width: 768px) {
            .mobile-menu-hidden {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Contenedor principal -->
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="bg-blue-600 text-white shadow-lg">
            <div class="flex items-center justify-between px-4 py-3">
                <!-- Logo y título -->
                <div class="flex items-center space-x-3">
                    <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-book text-2xl"></i>
                        <h1 class="text-xl font-bold">Admin Biblioteca</h1>
                    </div>
                </div>
                
                <!-- Menú de navegación superior -->
                <nav class="hidden md:block">
                    <ul class="flex space-x-6">
                        <li><a href="#" class="nav-link hover:bg-blue-700 px-3 py-2 rounded transition" data-page="inicio">Inicio</a></li>
                        <li><a href="#" class="nav-link hover:bg-blue-700 px-3 py-2 rounded transition" data-page="usuarios">Usuarios</a></li>
                        <li><a href="#" class="nav-link hover:bg-blue-700 px-3 py-2 rounded transition" data-page="libros">Libros</a></li>
                        <li><a href="#" class="nav-link hover:bg-blue-700 px-3 py-2 rounded transition" data-page="prestamos">Préstamos</a></li>
                        <li><a href="#" class="nav-link hover:bg-red-500 px-3 py-2 rounded transition" data-page="salir">Salir</a></li>
                    </ul>
                </nav>
                
                <!-- Perfil de usuario -->
                <div class="flex items-center space-x-3">
                    <span class="hidden sm:inline">Administrador</span>
                    <div class="w-8 h-8 bg-blue-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Contenido principal y sidebar -->
        <div class="flex flex-1">
            <!-- Sidebar para desktop y overlay para móvil -->
            <div id="sidebar-overlay" class="fixed inset-0 z-10 sidebar-overlay md:hidden" style="display: none;"></div>
            
            <!-- Sidebar -->
            <aside id="sidebar" class="mobile-menu-hidden sidebar-transition fixed md:relative z-20 w-64 bg-gray-800 text-white flex-shrink-0 h-full md:h-auto">
                <div class="p-5">
                    <h2 class="text-lg font-semibold mb-6 flex items-center">
                        <i class="fas fa-book-open mr-2"></i> Menú de Navegación
                    </h2>
                    <nav>
                        <ul class="space-y-2">
                            <li><a href="#" class="sidebar-link block px-4 py-3 rounded hover:bg-gray-700 transition" data-page="inicio">
                                <i class="fas fa-home mr-3"></i> Inicio
                            </a></li>
                            <li><a href="#" class="sidebar-link block px-4 py-3 rounded hover:bg-gray-700 transition" data-page="libros">
                                <i class="fas fa-book mr-3"></i> Libros
                            </a></li>
                            <li><a href="#" class="sidebar-link block px-4 py-3 rounded hover:bg-gray-700 transition" data-page="prestamos">
                                <i class="fas fa-exchange-alt mr-3"></i> Préstamos
                            </a></li>
                            <li>
                                <a href="{{ route('categorias.index') }}"class="block px-4 py-3 rounded hover:bg-gray-700 transition">
                                    <i class="fas fa-tags mr-3"></i> Categorias
                                </a>
                            </li><!-- MOVIFIQUE LO DE CATEGORIAS -->
                            <li class="pt-4 border-t border-gray-700">
                                <a href="{{ route('logout') }}" class="sidebar-link block px-4 py-3 rounded hover:bg-red-600 transition" data-page="salir">
                                    <i class="fas fa-sign-out-alt mr-3"></i> Salir
                                     <!-- MOVIIII -->
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                    <!-- Información adicional en el sidebar -->
                    <div class="mt-10 p-4 bg-gray-900 rounded-lg">
                        <h3 class="font-medium text-sm mb-2">Estadísticas rápidas</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span>Libros activos:</span>
                                <span class="font-bold">1,245</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Préstamos hoy:</span>
                                <span class="font-bold">23</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Usuarios activos:</span>
                                <span class="font-bold">156</span>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            
    @yield('content')

   @include('partials.auth.admin.footer')
         
