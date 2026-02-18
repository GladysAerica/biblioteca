 @extends('layout.auth')

 @section('content')
 <!--contenedor principal para ambos formularios-->
 <div class="container mx-auto px-4 py-8 md:py-12">
        <!-- Encabezado -->
        <div class="text-center mb-8 md:mb-12">
            <a href="index.html" class="inline-flex items-center text-white hover:text-blue-200 transition duration-300 mb-4">
                <i class="fas fa-arrow-left mr-2"></i> Volver al inicio
            </a>
            <div class="flex justify-center items-center space-x-3 mb-4">
                <i class="fas fa-book-open text-3xl text-white"></i>
                <h1 class="text-3xl md:text-4xl font-bold text-white">Biblioteca<span class="text-blue-300">Digital</span></h1>
            </div>
            <p class="text-blue-100 text-lg">Accede a miles de recursos educativos y culturales</p>
        </div>

        <!-- Contenedor de formularios -->
        <div class="flex flex-col lg:flex-row gap-8 justify-center items-start max-w-6xl mx-auto">
            
            <!-- Formulario de Login -->
            <div class="form-container">
                <div class="form-card p-6 md:p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-2">Iniciar Sesión</h2>
                        <p class="text-gray-600">Accede a tu cuenta de la biblioteca</p>
                    </div>
                    
                    <form id="loginForm" action="{{ route('login') }}" method="POST" class="space-y-6">
                        @csrf  <!-- SE AÑADIOOOO -->
                        <!-- Campo de Email -->
                        <div>
                            <label for="loginEmail" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-envelope text-blue-600 mr-2"></i>Correo Electrónico
                            </label>
                            <input 
                                type="email" 
                                id="loginEmail" 
                                name="email"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="tucorreo@ejemplo.com"
                                required
                            >
                            <div class="text-red-500 text-sm mt-1 hidden" id="loginEmailError">
                                Por favor, introduce un correo electrónico válido
                            </div>
                        </div>
                        
                        <!-- Campo de Contraseña -->
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <label for="loginPassword" class="block text-gray-700 font-medium">
                                    <i class="fas fa-lock text-blue-600 mr-2"></i>Contraseña
                                </label>
                                <a href="#" class="text-sm form-link">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="relative">
                                <input 
                                    type="password" 
                                    id="loginPassword" 
                                    name="password"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 pr-10"
                                    placeholder="Introduce tu contraseña"
                                    required
                                >
                                <span class="password-toggle absolute right-3 top-3 text-gray-500 hover:text-gray-700">
                                    <i class="fas fa-eye" id="loginPasswordToggle"></i>
                                </span>
                            </div>
                            <div class="text-red-500 text-sm mt-1 hidden" id="loginPasswordError">
                                La contraseña debe tener al menos 6 caracteres
                            </div>
                        </div>
                        
                        <!-- Recordar sesión -->
                        <div class="flex items-center">
                            <input 
                                type="checkbox" 
                                id="rememberMe" 
                                name="remember"
                                class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500"
                            >
                            <label for="rememberMe" class="ml-2 text-gray-700">Recordar mi sesión</label>
                        </div>
                        
                        <!-- Botón de envío -->
                        <button 
                            type="submit" 
                            class="btn-primary w-full py-3 rounded-lg text-white font-semibold text-lg"
                        >
                            <i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión
                        </button>
                        
                        <!-- Separador -->
                        <div class="relative flex items-center justify-center my-6">
                            <div class="border-t border-gray-300 w-full"></div>
                            <span class="absolute bg-white px-4 text-gray-500">O continúa con</span>
                        </div>
                        
                        <!-- Botones de login social -->
                        <div class="grid grid-cols-2 gap-4">
                            <button 
                                type="button" 
                                class="btn-secondary py-3 rounded-lg font-medium flex items-center justify-center"
                            >
                                <i class="fab fa-google text-red-500 mr-2"></i>Google
                            </button>
                            <button 
                                type="button" 
                                class="btn-secondary py-3 rounded-lg font-medium flex items-center justify-center"
                            >
                                <i class="fab fa-facebook text-blue-600 mr-2"></i>Facebook
                            </button>
                        </div>
                    </form>
                    
                    <!-- Enlace a registro -->
                    <div class="text-center mt-8 pt-6 border-t border-gray-200">
                        <p class="text-gray-700">¿No tienes una cuenta? 
                            <a href="#register" class="form-link font-semibold">Regístrate aquí</a>
                        </p>
                    </div>
                </div>
                
                <!-- Información adicional para login -->
                <div class="mt-6 p-6 bg-blue-50 rounded-lg border border-blue-200">
                    <h3 class="font-bold text-blue-900 mb-2 flex items-center">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>Ventajas de tener una cuenta
                    </h3>
                    <ul class="text-blue-800 space-y-1 text-sm">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Acceso a préstamos de libros</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Reservas en línea</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Historial de préstamos</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Recomendaciones personalizadas</li>
                    </ul>
                </div>
            </div>
            
            <!-- Formulario de Registro -->
            <div class="form-container" id="register">
                <div class="form-card p-6 md:p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-blue-900 mb-2">Crear Cuenta</h2>
                        <p class="text-gray-600">Únete a nuestra comunidad de lectores</p>
                    </div>
                    
                    <form id="registerForm" action="{{ route('register') }}" method ="POST" class="space-y-6">
                        @csrf 
                        <!-- Nombre y Apellido en una fila -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Campo de Nombre -->
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2"> <!-- CAMBIOOOO -->
                                    <i class="fas fa-user text-blue-600 mr-2"></i>Nombre
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name"
                                    class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                    placeholder="Tu nombre"
                                    required
                                >
                                <div class="text-red-500 text-sm mt-1 hidden" id="firstNameError">
                                    El nombre es requerido
                                </div>
                            </div>                            
                            <!-- Campo de Apellido -->
                        </div>
                        
                        <!-- Campo de Email -->
                        <div>
                            <label for="registerEmail" class="block text-gray-700 font-medium mb-2">
                                <i class="fas fa-envelope text-blue-600 mr-2"></i>Correo Electrónico
                            </label>
                            <input 
                                type="email" 
                                id="registerEmail" 
                                name="email"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                                placeholder="tucorreo@ejemplo.com"
                                required
                            >
                            <div class="text-red-500 text-sm mt-1 hidden" id="registerEmailError">
                                Por favor, introduce un correo electrónico válido
                            </div>
                        </div>
                        
                        <!-- Contraseña y Confirmar Contraseña en una fila -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Campo de Contraseña -->
                            <div>
                                <label for="password" class="block text-gray-700 font-medium mb-2">
                                    <i class="fas fa-lock text-blue-600 mr-2"></i>Contraseña
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password" 
                                        name="password"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 pr-10"
                                        placeholder="Crea una contraseña"
                                        required
                                    >
                                    <span class="password-toggle absolute right-3 top-3 text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-eye" id="registerPasswordToggle"></i>
                                    </span>
                                </div>
                                <div class="text-gray-500 text-xs mt-2">
                                    Mínimo 8 caracteres, con mayúsculas, minúsculas y números
                                </div>
                                <div class="text-red-500 text-sm mt-1 hidden" id="registerPasswordError">
                                    La contraseña no cumple los requisitos
                                </div>
                            </div>
                            
                            <!-- Campo de Confirmar Contraseña -->
                            <div>
                                <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">
                                    <i class="fas fa-lock text-blue-600 mr-2"></i>Confirmar Contraseña
                                </label>
                                <div class="relative">
                                    <input 
                                        type="password" 
                                        id="password_confirmation" 
                                        name="password_confirmation"
                                        class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 pr-10"
                                        placeholder="Repite tu contraseña"
                                        required
                                    >
                                    <span class="password-toggle absolute right-3 top-3 text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-eye" id="registerConfirmPasswordToggle"></i>
                                    </span>
                                </div>
                                <div class="text-red-500 text-sm mt-1 hidden" id="confirmPasswordError">
                                    Las contraseñas no coinciden
                                </div>
                            </div>
                        </div>
                        
                        <!-- Términos y condiciones -->
                        <div class="flex items-start">
                            <input 
                                type="checkbox" 
                                id="acceptTerms" 
                                name="terms"
                                class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500 mt-1"
                                required
                            >
                            <label for="acceptTerms" class="ml-2 text-gray-700 text-sm">
                                Acepto los <a href="#" class="form-link">Términos y Condiciones</a> y la 
                                <a href="#" class="form-link">Política de Privacidad</a> de Biblioteca Digital. 
                                Confirmo que tengo al menos 16 años de edad.
                            </label>
                        </div>
                        <div class="text-red-500 text-sm mt-1 hidden" id="termsError">
                            Debes aceptar los términos y condiciones
                        </div>
                        
                        <!-- Botón de envío -->
                        <button 
                            type="submit" 
                            class="btn-primary w-full py-3 rounded-lg text-white font-semibold text-lg"
                        >
                            <i class="fas fa-user-plus mr-2"></i>Crear Cuenta
                        </button>
                    </form>
                    
                    <!-- Enlace a login -->
                    <div class="text-center mt-8 pt-6 border-t border-gray-200">
                        <p class="text-gray-700">¿Ya tienes una cuenta? 
                            <a href="#login" class="form-link font-semibold">Inicia sesión aquí</a>
                        </p>
                    </div>
                </div>
                
                <!-- Información adicional para registro -->
                <div class="mt-6 p-6 bg-blue-50 rounded-lg border border-blue-200">
                    <h3 class="font-bold text-blue-900 mb-3 flex items-center">
                        <i class="fas fa-gift text-blue-600 mr-2"></i>Beneficios al registrarte
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="fas fa-book text-blue-600"></i>
                            </div>
                            <span class="text-blue-800 text-sm">Hasta 5 libros en préstamo</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="fas fa-calendar-alt text-blue-600"></i>
                            </div>
                            <span class="text-blue-800 text-sm">Reserva de salas de estudio</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="fas fa-bell text-blue-600"></i>
                            </div>
                            <span class="text-blue-800 text-sm">Notificaciones personalizadas</span>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="fas fa-star text-blue-600"></i>
                            </div>
                            <span class="text-blue-800 text-sm">Acceso a eventos exclusivos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection