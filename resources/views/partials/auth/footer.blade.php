   <!-- Footer simplificado -->
        <div class="mt-12 text-center text-blue-100">
            <p class="text-sm">&copy; 2023 Biblioteca Digital. Todos los derechos reservados.</p>
            <div class="mt-4 flex justify-center space-x-6 text-sm">
                <a href="#" class="hover:text-white transition duration-300">Política de privacidad</a>
                <a href="#" class="hover:text-white transition duration-300">Términos de uso</a>
                <a href="#" class="hover:text-white transition duration-300">Ayuda</a>
                <a href="#" class="hover:text-white transition duration-300">Contacto</a>
            </div>
        </div>
    </div>

    

    <!-- JavaScript mínimo para funcionalidad de mostrar/ocultar contraseña -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad para mostrar/ocultar contraseña
            function setupPasswordToggle(toggleId, passwordId) {
                const toggle = document.getElementById(toggleId);
                const passwordInput = document.getElementById(passwordId);
                
                if (toggle && passwordInput) {
                    toggle.addEventListener('click', function() {
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);
                        
                        // Cambiar icono
                        if (type === 'text') {
                            this.classList.remove('fa-eye');
                            this.classList.add('fa-eye-slash');
                        } else {
                            this.classList.remove('fa-eye-slash');
                            this.classList.add('fa-eye');
                        }
                    });
                }
            }
            
            // Configurar los toggles de contraseña
            setupPasswordToggle('loginPasswordToggle', 'loginPassword');
            setupPasswordToggle('registerPasswordToggle', 'registerPassword');
            setupPasswordToggle('registerConfirmPasswordToggle', 'registerConfirmPassword');
            
            // Navegación suave entre formularios
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId !== '#') {
                        e.preventDefault();
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            targetElement.scrollIntoView({ behavior: 'smooth' });
                            
                            // Resaltar el formulario de destino
                            targetElement.classList.add('ring-2', 'ring-blue-500', 'ring-opacity-50');
                            setTimeout(() => {
                                targetElement.classList.remove('ring-2', 'ring-blue-500', 'ring-opacity-50');
                            }, 2000);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>