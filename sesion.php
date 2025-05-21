<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - TestWeb Secure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos_sesion.css">
</head>

<body>
    <!-- Login Section -->
    <div class="login-container flex items-center justify-center px-4 py-10">
        <div class="w-full max-w-4xl flex rounded-xl shadow-lg overflow-hidden">
            <!-- Left Side - Form -->
            <div class="w-full md:w-1/2 bg-white p-8 md:p-12">
                <div class="flex justify-center mb-8">
                    <a href="index.php" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="font-bold text-2xl text-gray-800">TestWeb Secure</span>
                    </a>
                </div>

                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Bienvenido de nuevo</h2>
                    <p class="text-gray-600">Inicia sesión para acceder a tu cuenta</p>
                </div>

                <form id="loginForm" class="space-y-6" method="POST">
                    
                    
                    <!-- Mensajes de error -->
                    <div id="login-error" class="hidden py-3 px-4 mb-4 bg-red-50 text-red-700 rounded-md text-sm"></div>

                    <!-- Campo email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico</label>
                        <input type="email" id="email" name="email"
                            class="form-input w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none"
                            placeholder="tu@email.com" 
                            required
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                    </div>

                    <!-- Campo contraseña -->
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                            <a href="forgot-password.php" class="text-sm text-indigo-600 hover:text-indigo-800">¿Olvidaste tu contraseña?</a>
                        </div>
                        <div class="relative">
                            <input type="password" id="password" name="password"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none"
                                placeholder="••••••••" 
                                required
                                minlength="8">
                            <!-- Botón para mostrar/ocultar contraseña -->
                            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" onclick="togglePassword()">
                                <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Recordar sesión -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember"
                            class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Mantener sesión iniciada</label>
                    </div>

                    <!-- Botón de submit -->
                    <div>
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 transition focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            id="login-btn">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>

                <script>
                // Función para mostrar/ocultar contraseña
                function togglePassword() {
                    const passwordInput = document.getElementById('password');
                    passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
                }
                </script>

                <div class="mt-8">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">O continúa con</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <button type="button"
                            class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white hover:bg-gray-50 transition">
                            <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="#4285F4"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853" />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05" />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335" />
                            </svg>
                            Google
                        </button>
                        <button type="button"
                            class="flex justify-center items-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white hover:bg-gray-50 transition">
                            <svg class="h-5 w-5 mr-2" fill="#1877F2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            Facebook
                        </button>
                    </div>
                </div>

                <p class="mt-8 text-center text-sm text-gray-600">
                    ¿No tienes una cuenta?
                    <a href="registro.php" class="font-medium text-indigo-600 hover:text-indigo-800">Regístrate</a>
                </p>
            </div>

            <!-- Right Side - Image/Graphic -->
            <div class="hidden md:block md:w-1/2 gradient-bg p-12">
                <div class="h-full flex flex-col justify-center items-center text-white">
                    <div class="animate-float mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-center">Seguridad Web a tu Alcance</h3>
                    <p class="text-center opacity-90">Accede a herramientas avanzadas para detectar vulnerabilidades en
                        tus sitios web de prueba.</p>

                    <div class="mt-12 w-full bg-white bg-opacity-20 p-6 rounded-lg">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-white rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium">Análisis Completo</h4>
                                <p class="text-sm opacity-80">Detecta múltiples vulnerabilidades en un solo escaneo</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-white rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium">Resultados Rápidos</h4>
                                <p class="text-sm opacity-80">Obtén informes detallados en segundos</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4">
                            <div class="bg-white rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-medium">Historial de Escaneos</h4>
                                <p class="text-sm opacity-80">Accede a todos tus análisis anteriores</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-400">&copy; <span id="current-year">2023</span> TestWeb Secure. Todos los derechos
                reservados.</p>
        </div>
    </footer>

    <script src="javascript/js_sesion.js"></script>
</body>

</html>