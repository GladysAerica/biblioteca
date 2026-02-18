 <!-- Footer -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-book text-xl"></i>
                            <span class="text-lg font-bold">Biblioteca Digital</span>
                        </div>
                        <p class="text-gray-400 text-sm mt-1">Sistema de administración de biblioteca</p>
                    </div>
                    
                    <div class="text-center md:text-right">
                        <p class="text-gray-400">© 2023 Biblioteca Digital. Todos los derechos reservados.</p>
                        <p class="text-gray-500 text-sm mt-1">Versión 2.1.0</p>
                    </div>
                </div>
                
                <div class="mt-6 pt-6 border-t border-gray-700 text-center text-gray-400 text-sm">
                    <p>Este sistema es para uso exclusivo del personal autorizado de la biblioteca.</p>
                </div>
            </div>
        </footer>
    </div>
</div>

    <!-- JavaScript para funcionalidad interactiva -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elementos del DOM
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarOverlay = document.getElementById('sidebar-overlay');
            const navLinks = document.querySelectorAll('.nav-link');
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            
            // Estado del sidebar
            let sidebarOpen = false;
            
            // Función para abrir/cerrar sidebar en móviles
            function toggleSidebar() {
                sidebarOpen = !sidebarOpen;
                
                if (sidebarOpen) {
                    sidebar.classList.remove('mobile-menu-hidden');
                    sidebarOverlay.style.display = 'block';
                    setTimeout(() => {
                        sidebarOverlay.classList.add('opacity-100');
                    }, 10);
                } else {
                    sidebar.classList.add('mobile-menu-hidden');
                    sidebarOverlay.classList.remove('opacity-100');
                    setTimeout(() => {
                        sidebarOverlay.style.display = 'none';
                    }, 300);
                }
            }
            
            // Event listener para el botón del menú hamburguesa
            mobileMenuToggle.addEventListener('click', toggleSidebar);
            
            // Cerrar sidebar al hacer clic en el overlay
            sidebarOverlay.addEventListener('click', function() {
                if (sidebarOpen) {
                    toggleSidebar();
                }
            });
            
            // Función para cambiar de página
            function changePage(pageName) {
                // Actualizar contenido según la página seleccionada
                const content = document.getElementById('content');
                let newContent = '';
                
                switch(pageName) {
                    case 'inicio':
                        newContent = `
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Inicio - Panel Principal</h2>
                                <p class="text-gray-600">Esta es la página de inicio del sistema de administración de la biblioteca.</p>
                            </section>
                            <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-6">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-info-circle text-blue-500"></i>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-blue-700">
                                            Bienvenido al sistema. Aquí encontrarás un resumen de las actividades recientes y estadísticas importantes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        `;
                        break;
                    case 'usuarios':
                        newContent = `
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Usuarios</h2>
                                <p class="text-gray-600">Administra los usuarios registrados en el sistema de la biblioteca.</p>
                            </section>
                            <div class="bg-white rounded-lg shadow p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Lista de Usuarios</h3>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Nuevo Usuario</button>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="py-3 px-4 font-semibold text-gray-700">ID</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Nombre</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Email</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Tipo</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Estado</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-t hover:bg-gray-50">
                                                <td class="py-3 px-4">001</td>
                                                <td class="py-3 px-4">María González</td>
                                                <td class="py-3 px-4">maria@email.com</td>
                                                <td class="py-3 px-4">Estudiante</td>
                                                <td class="py-3 px-4"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">Activo</span></td>
                                                <td class="py-3 px-4">
                                                    <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                    <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="border-t hover:bg-gray-50">
                                                <td class="py-3 px-4">002</td>
                                                <td class="py-3 px-4">Carlos Rodríguez</td>
                                                <td class="py-3 px-4">carlos@email.com</td>
                                                <td class="py-3 px-4">Profesor</td>
                                                <td class="py-3 px-4"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">Activo</span></td>
                                                <td class="py-3 px-4">
                                                    <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                    <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        `;
                        break;
                    case 'libros':
                        newContent = `
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Libros</h2>
                                <p class="text-gray-600">Administra el catálogo de libros de la biblioteca.</p>
                            </section>
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                                <div class="lg:col-span-2">
                                    <div class="bg-white rounded-lg shadow p-6">
                                        <div class="flex justify-between items-center mb-6">
                                            <h3 class="text-xl font-bold text-gray-800">Catálogo de Libros</h3>
                                            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Agregar Libro</button>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-left">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th class="py-3 px-4 font-semibold text-gray-700">ISBN</th>
                                                        <th class="py-3 px-4 font-semibold text-gray-700">Título</th>
                                                        <th class="py-3 px-4 font-semibold text-gray-700">Autor</th>
                                                        <th class="py-3 px-4 font-semibold text-gray-700">Disponibles</th>
                                                        <th class="py-3 px-4 font-semibold text-gray-700">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-t hover:bg-gray-50">
                                                        <td class="py-3 px-4">978-3-16-148410-0</td>
                                                        <td class="py-3 px-4">Cien años de soledad</td>
                                                        <td class="py-3 px-4">Gabriel García Márquez</td>
                                                        <td class="py-3 px-4">3 de 5</td>
                                                        <td class="py-3 px-4">
                                                            <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-t hover:bg-gray-50">
                                                        <td class="py-3 px-4">978-0-452-28423-4</td>
                                                        <td class="py-3 px-4">1984</td>
                                                        <td class="py-3 px-4">George Orwell</td>
                                                        <td class="py-3 px-4">2 de 3</td>
                                                        <td class="py-3 px-4">
                                                            <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="bg-white rounded-lg shadow p-6">
                                        <h3 class="text-xl font-bold text-gray-800 mb-4">Búsqueda Rápida</h3>
                                        <div class="space-y-4">
                                            <div>
                                                <label class="block text-gray-700 text-sm font-medium mb-2">Buscar por título</label>
                                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese título...">
                                            </div>
                                            <div>
                                                <label class="block text-gray-700 text-sm font-medium mb-2">Buscar por autor</label>
                                                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese autor...">
                                            </div>
                                            <button class="w-full bg-gray-800 text-white py-2 rounded hover:bg-gray-900 transition">Buscar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        break;
                    case 'prestamos':
                        newContent = `
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Gestión de Préstamos</h2>
                                <p class="text-gray-600">Administra los préstamos de libros a usuarios.</p>
                            </section>
                            <div class="bg-white rounded-lg shadow p-6">
                                <div class="flex justify-between items-center mb-6">
                                    <h3 class="text-xl font-bold text-gray-800">Registro de Préstamos</h3>
                                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Nuevo Préstamo</button>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="py-3 px-4 font-semibold text-gray-700">ID Préstamo</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Usuario</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Libro</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Fecha Préstamo</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Fecha Devolución</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Estado</th>
                                                <th class="py-3 px-4 font-semibold text-gray-700">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-t hover:bg-gray-50">
                                                <td class="py-3 px-4">PR-001</td>
                                                <td class="py-3 px-4">María González</td>
                                                <td class="py-3 px-4">Cien años de soledad</td>
                                                <td class="py-3 px-4">15/03/2023</td>
                                                <td class="py-3 px-4">29/03/2023</td>
                                                <td class="py-3 px-4"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs font-medium">Activo</span></td>
                                                <td class="py-3 px-4">
                                                    <button class="text-green-600 hover:text-green-800 mr-2"><i class="fas fa-check"></i></button>
                                                    <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="border-t hover:bg-gray-50">
                                                <td class="py-3 px-4">PR-002</td>
                                                <td class="py-3 px-4">Carlos Rodríguez</td>
                                                <td class="py-3 px-4">El principito</td>
                                                <td class="py-3 px-4">10/03/2023</td>
                                                <td class="py-3 px-4">24/03/2023</td>
                                                <td class="py-3 px-4"><span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs font-medium">Vencido</span></td>
                                                <td class="py-3 px-4">
                                                    <button class="text-green-600 hover:text-green-800 mr-2"><i class="fas fa-check"></i></button>
                                                    <button class="text-blue-600 hover:text-blue-800 mr-2"><i class="fas fa-edit"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        `;
                        break;
                    case 'salir':
                        newContent = `
                            <section class="mb-8">
                                <h2 class="text-2xl font-bold text-gray-800 mb-2">Cerrar Sesión</h2>
                                <p class="text-gray-600">Estás a punto de salir del sistema de administración.</p>
                            </section>
                            <div class="max-w-md mx-auto bg-white rounded-lg shadow p-8 text-center">
                                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <i class="fas fa-sign-out-alt text-red-600 text-2xl"></i>
                                </div>
                                <h3 class="text-xl font-bold text-gray-800 mb-2">¿Seguro que deseas salir?</h3>
                                <p class="text-gray-600 mb-6">Serás redirigido a la página de inicio de sesión.</p>
                                <div class="flex space-x-4">
                                    <button class="flex-1 bg-gray-300 text-gray-800 py-3 rounded hover:bg-gray-400 transition">Cancelar</button>
                                    <a href="{{ route('logout') }}" class="flex-1 bg-red-600 text-white py-3 rounded hover:bg-red-700 transition">Salir</a>
                                   
                                </div>
                            </div>
                        `;
                        break;
                }
                //  #<button class="flex-1 bg-red-600 text-white py-3 rounded hover:bg-red-700 transition">Salir</button>
                content.innerHTML = newContent;
                
                // Cerrar sidebar en móviles después de cambiar de página
                if (window.innerWidth < 768 && sidebarOpen) {
                    toggleSidebar();
                }
            }
            
            // Función para resaltar enlace activo
            function setActiveLink(pageName) {
                // Remover clase activa de todos los enlaces
                navLinks.forEach(link => {
                    link.classList.remove('active-menu');
                });
                
                sidebarLinks.forEach(link => {
                    link.classList.remove('active-menu');
                });
                
                // Agregar clase activa al enlace correspondiente
                navLinks.forEach(link => {
                    if (link.dataset.page === pageName) {
                        link.classList.add('active-menu');
                    }
                });
                
                sidebarLinks.forEach(link => {
                    if (link.dataset.page === pageName) {
                        link.classList.add('active-menu');
                    }
                });
            }
            
            // Event listeners para enlaces de navegación
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const pageName = this.dataset.page;
                    changePage(pageName);
                    setActiveLink(pageName);
                });
            });
            
            // Event listeners para enlaces del sidebar
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const pageName = this.dataset.page;
                    changePage(pageName);
                    setActiveLink(pageName);
                });
            });
            
            // Cerrar sidebar al redimensionar la ventana si se vuelve a tamaño desktop
            window.addEventListener('resize', function() {
                if (window.innerWidth >= 768 && sidebarOpen) {
                    toggleSidebar();
                }
            });
        });
    </script>
</body>
</html>