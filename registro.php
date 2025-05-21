<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - TestWeb Secure</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos_registro.css">
</head>

<body>
    <!-- Register Section -->
    <div class="register-container">
        <div class="register-wrapper">

            <div class="register-graphic">
                <div class="graphic-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </div>
                <h3 class="graphic-title">Únete a TestWeb Secure</h3>
                <p class="graphic-text">Crea una cuenta para acceder a todas las herramientas de detección de
                    vulnerabilidades web.</p>

                <div class="benefits-container">
                    <h4 class="benefits-title">¿Por qué registrarse?</h4>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <h4>Guarda tu historial</h4>
                            <p>Accede a todos tus análisis anteriores</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <h4>Alertas personalizadas</h4>
                            <p>Recibe notificaciones de seguridad</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="benefit-content">
                            <h4>Funciones avanzadas</h4>
                            <p>Accede a herramientas premium</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="register-form-container">
                <div class="form-header">
                    <a href="index.php" class="logo-link">
                        <svg xmlns="http://www.w3.org/2000/svg" class="logo-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="logo-text">TestWeb Secure</span>
                    </a>
                </div>

                <div class="form-title-container">
                    <h2 class="form-title">Crear una cuenta</h2>
                    <p class="form-subtitle">Completa el formulario para registrarte</p>
                </div>

                <form id="registerForm" class="register-form" action="registro.php" method="POST">
                    <!-- Token CSRF para seguridad -->
                    <input type="hidden" name="csrf_token" id="csrf_token" value="<?= $_SESSION['csrf_token'] ?? '' ?>">
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input type="text" id="firstName" name="firstName" class="form-input" placeholder="Juan" required>
                        </div>

                        <div class="form-group">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input type="text" id="lastName" name="lastName" class="form-input" placeholder="Pérez" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-input" 
                            placeholder="tu@email.com" required
                            pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                    </div>

                    <div class="form-group">
                        <label for="organization" class="form-label">Organización (opcional)</label>
                        <input type="text" id="organization" name="organization" class="form-input"
                            placeholder="Nombre de tu empresa o universidad">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" id="password" name="password" class="form-input"
                            placeholder="Mínimo 8 caracteres" required minlength="8">
                        <div class="password-strength-container">
                            <div class="password-strength-header">
                                <span class="password-strength-label">Seguridad de la contraseña:</span>
                                <span id="passwordStrengthText" class="password-strength-text">Débil</span>
                            </div>
                            <div class="password-strength-bg">
                                <div id="passwordStrength" class="password-strength-bar password-strength-weak"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-input"
                            placeholder="Repite tu contraseña" required>
                        <p id="passwordMatch" class="password-match">Las contraseñas deben coincidir</p>
                    </div>

                    <div class="terms-container">
                        <input type="checkbox" id="terms" name="terms" class="terms-checkbox" required>
                        <label for="terms" class="terms-label">
                            Acepto los <a href="#" class="terms-link">Términos de servicio</a> y la <a href="#"
                                class="terms-link">Política de privacidad</a>
                        </label>
                    </div>

                    <button type="submit" class="submit-button">
                        Crear cuenta
                    </button>
                </form>

                <div class="separator">
                    <div class="separator-line"></div>
                    <span class="separator-text">O regístrate con</span>
                </div>

                <div class="social-buttons">
                    <button type="button" class="social-button" aria-label="Registrarse con Google">
                        <svg class="social-icon google-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                    <button type="button" class="social-button" aria-label="Registrarse con Facebook">
                        <svg class="social-icon facebook-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        Facebook
                    </button>
                </div>

                <div class="login-link-container">
                    <p>¿Ya tienes una cuenta? <a href="sesion.php" class="login-link">Inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-text">&copy; <span id="current-year">2023</span> TestWeb Secure. Todos los derechos
                reservados.</p>
        </div>
    </footer>

    <script src="javascript/registro.js"></script>
</body>

</html>