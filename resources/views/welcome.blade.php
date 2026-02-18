<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Biblioteca') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        
               <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        h1, h2, h3, h4 {
            font-family: 'Merriweather', serif;
        }
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
        }
        .book-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        .menu-open {
            display: flex !important;
        }
    </style>
        @endif
    </head>
    <body class="bg-gray-50">
    <!-- Header con navegación -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <i class="fas fa-book-open text-2xl text-blue-700"></i>
                <h1 class="text-xl md:text-2xl font-bold text-blue-900">Biblioteca<span class="text-blue-600">Digital</span></h1>
            </div>
            
            <!-- Navegación para desktop -->
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 transition duration-300 border-b-2 border-blue-700">Inicio</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-blue-700 transition duration-300">Catálogo</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-blue-700 transition duration-300">Servicios</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-blue-700 transition duration-300">Eventos</a>
                <a href="#" class="text-gray-700 font-semibold hover:text-blue-700 transition duration-300">Contacto</a>
            </nav>
            
            <!-- Botones de inicio y login para desktop -->
            <div class="hidden md:flex space-x-4">
                <a href="{{ route('login')}}" class="px-4 py-2 bg-blue-700 text-white font-semibold rounded-lg hover:bg-blue-800 transition duration-300">Iniciar Sesión</a>
                <a href="#" class="px-4 py-2 border border-blue-700 text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition duration-300">Registrarse</a>
            </div>
            
            <!-- Botón menú hamburguesa para móvil -->
            <button id="menu-toggle" class="md:hidden text-gray-700 text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Menú móvil -->
        <div id="mobile-menu" class="md:hidden hidden flex-col bg-white shadow-lg px-4 py-6 space-y-4">
            <a href="#" class="text-blue-900 font-semibold py-2 border-b border-gray-100">Inicio</a>
            <a href="#" class="text-gray-700 font-semibold py-2 border-b border-gray-100">Catálogo</a>
            <a href="#" class="text-gray-700 font-semibold py-2 border-b border-gray-100">Servicios</a>
            <a href="#" class="text-gray-700 font-semibold py-2 border-b border-gray-100">Eventos</a>
            <a href="#" class="text-gray-700 font-semibold py-2 border-b border-gray-100">Contacto</a>
            <div class="pt-4 space-y-3">
                <a href="#" class="block px-4 py-3 bg-blue-700 text-white font-semibold rounded-lg text-center hover:bg-blue-800 transition duration-300">Iniciar Sesión</a>
                <a href="#" class="block px-4 py-3 border border-blue-700 text-blue-700 font-semibold rounded-lg text-center hover:bg-blue-50 transition duration-300">Registrarse</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-16 md:py-24">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-blue-900 mb-12">Explora el Mundo de los Libros</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto text-blue-900 mb-12">Descubre miles de libros, revistas y recursos digitales en nuestra biblioteca. Accede desde cualquier lugar y en cualquier momento.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                <a href="#" class="px-8 py-4 bg-white text-blue-900 font-bold text-lg rounded-lg hover:bg-gray-100 transition duration-300 shadow-lg">Explorar Catálogo</a>
                <a href="#" class="px-8 py-4 border-2 border-white text-white font-bold text-lg rounded-lg hover:bg-white hover:text-blue-900 transition duration-300">Cómo Funciona</a>
            </div>
        </div>
    </section>

    <!-- Sección de servicios -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-12">Nuestros Servicios</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-700 text-4xl mb-6">
                        <i class="fas fa-book-reader"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Préstamo de Libros</h3>
                    <p class="text-gray-700 mb-6">Accede a nuestro extenso catálogo de libros físicos y digitales. Puedes reservar en línea y recoger en nuestra sede.</p>
                    <a href="#" class="text-blue-700 font-semibold hover:text-blue-900 transition duration-300">Más información <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
                
                <!-- Servicio 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-700 text-4xl mb-6">
                        <i class="fas fa-laptop-house"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Recursos Digitales</h3>
                    <p class="text-gray-700 mb-6">Biblioteca digital con acceso a miles de eBooks, audiolibros, revistas académicas y bases de datos especializadas.</p>
                    <a href="#" class="text-blue-700 font-semibold hover:text-blue-900 transition duration-300">Más información <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
                
                <!-- Servicio 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg border border-gray-100">
                    <div class="text-blue-700 text-4xl mb-6">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-900 mb-4">Actividades Culturales</h3>
                    <p class="text-gray-700 mb-6">Participa en nuestros clubes de lectura, talleres, charlas con autores y eventos especiales para todas las edades.</p>
                    <a href="#" class="text-blue-700 font-semibold hover:text-blue-900 transition duration-300">Más información <i class="fas fa-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de libros destacados -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-12">Libros Destacados</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Libro 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden book-card">
                    <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Libro sobre naturaleza" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-blue-900 mb-2">La Naturaleza del Saber</h3>
                        <p class="text-gray-600 text-sm mb-4">Un viaje fascinante a través de la ciencia y la filosofía de la naturaleza.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-700 font-semibold">Disponible</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden book-card">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1198&q=80" alt="Libro de arte" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-blue-900 mb-2">El Arte en la Historia</h3>
                        <p class="text-gray-600 text-sm mb-4">Exploración de los movimientos artísticos más influyentes de la humanidad.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-700 font-semibold">Disponible</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden book-card">
                    <img src="https://images.unsplash.com/photo-1551029506-0807df4e2031?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1034&q=80" alt="Libro de cocina" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-blue-900 mb-2">Sabores del Mundo</h3>
                        <p class="text-gray-600 text-sm mb-4">Recetas tradicionales de cinco continentes con historias culturales.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-orange-500 font-semibold">Prestado</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Libro 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden book-card">
                    <img src="https://images.unsplash.com/photo-1516979187457-637abb4f9353?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Libro de poesía" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-blue-900 mb-2">Poesía Contemporánea</h3>
                        <p class="text-gray-600 text-sm mb-4">Antología de los poetas más influyentes del siglo XXI.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-blue-700 font-semibold">Disponible</span>
                            <a href="#" class="text-blue-700 hover:text-blue-900"><i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-8 py-3 bg-blue-700 text-white font-bold rounded-lg hover:bg-blue-800 transition duration-300 shadow-lg">Ver Catálogo Completo</a>
            </div>
        </div>
    </section>

    <!-- Sección de información -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl font-bold text-blue-900 mb-6">Biblioteca Comunitaria Digital</h2>
                    <p class="text-gray-700 mb-6">Nuestra biblioteca ofrece acceso gratuito a recursos educativos, culturales y de entretenimiento para toda la comunidad. Con más de 50,000 títulos disponibles y un catálogo en constante crecimiento.</p>
                    <p class="text-gray-700 mb-8">Ya seas estudiante, investigador o simplemente un apasionado de la lectura, encontrarás recursos adaptados a tus intereses y necesidades.</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 text-xl mr-3"></i>
                            <span class="font-semibold">Acceso 24/7</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 text-xl mr-3"></i>
                            <span class="font-semibold">Recursos gratuitos</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 text-xl mr-3"></i>
                            <span class="font-semibold">Asistencia personalizada</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-green-600 text-xl mr-3"></i>
                            <span class="font-semibold">Eventos culturales</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Interior de biblioteca moderna" class="rounded-xl shadow-lg w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white pt-12 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Columna 1: Información -->
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <i class="fas fa-book-open text-2xl text-blue-300"></i>
                        <h2 class="text-xl font-bold">Biblioteca<span class="text-blue-300">Digital</span></h2>
                    </div>
                    <p class="text-blue-200 mb-6">Tu puerta de acceso al conocimiento, la cultura y el entretenimiento.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-blue-300 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Columna 2: Enlaces rápidos -->
                <div>
                    <h3 class="text-lg font-bold mb-6">Enlaces Rápidos</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Catálogo en línea</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Horarios y ubicación</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Preguntas frecuentes</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Préstamos y renovaciones</a></li>
                    </ul>
                </div>
                
                <!-- Columna 3: Servicios -->
                <div>
                    <h3 class="text-lg font-bold mb-6">Servicios</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Sala de estudio</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Computadoras públicas</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Formación de usuarios</a></li>
                        <li><a href="#" class="text-blue-200 hover:text-white transition duration-300">Acceso a bases de datos</a></li>
                    </ul>
                </div>
                
                <!-- Columna 4: Contacto -->
                <div>
                    <h3 class="text-lg font-bold mb-6">Contacto</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-300 mr-3 mt-1"></i>
                            <span class="text-blue-200">Av. de la Cultura 123, Ciudad Universitaria</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone text-blue-300 mr-3"></i>
                            <span class="text-blue-200">+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-300 mr-3"></i>
                            <span class="text-blue-200">info@bibliotecadigital.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock text-blue-300 mr-3"></i>
                            <span class="text-blue-200">Lun-Vie: 9am-8pm, Sáb: 10am-6pm</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Línea divisoria -->
            <div class="border-t border-blue-800 mt-10 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-blue-300 text-sm mb-4 md:mb-0">&copy; 2023 Biblioteca Digital. Todos los derechos reservados.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-blue-300 hover:text-white text-sm transition duration-300">Política de privacidad</a>
                        <a href="#" class="text-blue-300 hover:text-white text-sm transition duration-300">Términos de uso</a>
                        <a href="#" class="text-blue-300 hover:text-white text-sm transition duration-300">Mapa del sitio</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript para el menú hamburguesa -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('menu-open');
                
                // Cambiar icono del botón
                const icon = menuToggle.querySelector('i');
                if (icon.classList.contains('fa-bars')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Cerrar menú al hacer clic en un enlace (en dispositivos móviles)
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('menu-open');
                    const icon = menuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                });
            });
            
            // Cerrar menú al redimensionar la ventana (si se cambia a desktop)
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768) {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('menu-open');
                    const icon = menuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    </script>
</body>
</html>
