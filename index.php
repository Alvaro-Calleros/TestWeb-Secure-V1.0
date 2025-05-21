<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestWeb Secure - Detección de Vulnerabilidades Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos_index.css">
</head>

<body>
        <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container container">
            <!-- Logo -->
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="logo-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                <span class="logo-text">TestWeb Secure</span>
            </div>

            <!-- Botón menú móvil -->
            <button class="mobile-menu-button" aria-label="Abrir menú de navegación">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Enlaces de navegación -->
            <div class="nav-links">
                <a href="#" class="nav-link active">Inicio</a>
                <a href="#caracteristicas" class="nav-link">Características</a>
                <a href="#funcionamiento" class="nav-link">Funcionamiento</a>
                <a href="#acerca" class="nav-link">Acerca del Proyecto</a>
                <!-- Botones SOLO para móvil -->
                <div class="mobile-buttons">
                    <a href="sesion.php" class="login-button">Iniciar Sesión</a>
                    <a href="registro.php" class="regist-button">Registrar</a>
                </div>
            </div>

            <!-- Botones SOLO para desktop -->
            <div class="nav-buttons">
                <a href="sesion.php" class="login-button">Iniciar Sesión</a>
                <a href="registro.php" class="regist-button">Registrar</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container container">
            <div class="hero-content">
                <h1 class="hero-title">Detecta vulnerabilidades web con facilidad</h1>
                <p class="hero-description">TestWeb Secure es una aplicación orientada a la detección de
                    vulnerabilidades web básicas en sitios de prueba, desarrollada como proyecto universitario.</p>
                <div class="hero-buttons">
                    <a href="sesion.php"><button class="primary-button">Comenzar Ahora</button></a>
                    <a href="escaneo.php"><button class="secondary-button">Ver Demo</button></a>
                </div>
            </div>
            <div class="hero-image">
                <div class="security-card">
                    <svg xmlns="http://www.w3.org/2000/svg" class="security-icon" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    <div class="security-content">
                        <div class="security-title">Análisis de Seguridad</div>
                        <div class="security-subtitle">Escaneo en progreso...</div>
                        <div class="progress-container">
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="verification-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" class="badge-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title" id="caracteristicas">Características Principales</h2>
            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Detección de SQL Injection</h3>
                    <p class="feature-description">Identifica vulnerabilidades de inyección SQL básicas en formularios y
                        parámetros de URL.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon-container purple">
                        <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Análisis de Puertos Vulnerables</h3>
                    <p class="feature-description">
                        Examina los puertos abiertos en una IP para identificar servicios expuestos y posibles fallos de
                        seguridad.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon-container green">
                        <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Diagnóstico del Dominio y Encabezados HTTP</h3>
                    <p class="feature-description">Evalúa la configuración del dominio y los encabezados HTTP,
                        proponiendo mejoras para proteger contra ataques como clickjacking y sniffing.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon-container red">
                        <svg xmlns="http://www.w3.org/2000/svg" class="feature-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                    <h3 class="feature-title">Directorios Inseguros</h3>
                    <p class="feature-description">Identifica directorios y archivos potencialmente inseguros o
                        expuestos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title" id="funcionamiento">¿Cómo Funciona?</h2>
            <div class="steps-container">
                <!-- Step 1 -->
                <div class="step">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Ingresa la URL</h3>
                    <p class="step-description">Introduce la dirección del sitio web que deseas analizar en el campo de
                        entrada.</p>
                </div>

                <!-- Arrow -->
                <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Análisis Automático</h3>
                    <p class="step-description">Nuestro backend realiza pruebas automatizadas para detectar
                        vulnerabilidades comunes.</p>
                </div>

                <!-- Arrow -->
                <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Informe Detallado</h3>
                    <p class="step-description">Recibe un informe completo con las vulnerabilidades detectadas y
                        recomendaciones.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Description -->
    <section class="about">
        <div class="container">
            <div class="about-container">
                <h2 class="about-title" id="acerca">Acerca del Proyecto</h2>
                <div class="about-text">
                    <p><span class="gradient-text">"TestWeb Secure"</span> es una aplicación web orientada a la
                        detección de vulnerabilidades web básicas en sitios de prueba. La aplicación permite a los
                        usuarios ingresar una URL y ejecutar pruebas automatizadas para detectar potenciales riesgos de
                        seguridad, brindando un informe detallado de vulnerabilidades como SQL Injection básico, XSS
                        reflejado, headers inseguros y directorios/archivos inseguros.</p>

                    <p>El sistema se basa en la comunicación entre el frontend y el backend, donde el frontend recoge la
                        URL del usuario y envía la solicitud al backend, el cual realiza el análisis y devuelve los
                        resultados para ser presentados de manera estructurada en la interfaz.</p>

                    <p>En el área de Backend se lleva a cabo un registro de los usuarios con accesos, y datos de los
                        escaneos realizados por ellos guardados en una base de datos.</p>
                </div>

                <div class="about-buttons">
                    <button class="about-primary-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Probar Aplicación
                    </button>
                    <button class="about-secondary-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Ver Documentación
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="footer-logo-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="footer-logo-text">TestWeb Secure</span>
                    </div>
                    <p class="footer-description">Proyecto universitario para la detección de vulnerabilidades web
                        básicas en sitios de prueba.</p>
                </div>

                <div class="footer-links">
                    <div class="footer-links-section">
                        <h3>Enlaces</h3>
                        <ul class="footer-links-list">
                            <li><a href="#" class="footer-link">Inicio</a></li>
                            <li><a href="#" class="footer-link">Características</a></li>
                            <li><a href="#" class="footer-link">Documentación</a></li>
                            <li><a href="#" class="footer-link">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="footer-links-section">
                        <h3>Recursos</h3>
                        <ul class="footer-links-list">
                            <li><a href="#" class="footer-link">Guía de Usuario</a></li>
                            <li><a href="#" class="footer-link">API</a></li>
                            <li><a href="#" class="footer-link">Ejemplos</a></li>
                            <li><a href="#" class="footer-link">Blog</a></li>
                        </ul>
                    </div>

                    <div class="footer-links-section">
                        <h3>Legal</h3>
                        <ul class="footer-links-list">
                            <li><a href="#" class="footer-link">Términos</a></li>
                            <li><a href="#" class="footer-link">Privacidad</a></li>
                            <li><a href="#" class="footer-link">Licencias</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copyright">&copy; 2025 TestWeb Secure. Todos los derechos reservados.</p>
                <div class="footer-social">
                    <a href="#" class="social-link">
                        <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="social-icon" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm-1-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm5 7h-2v-3c0-.55-.45-1-1-1s-1 .45-1 1v3h-2v-6h2v1.1c.52-.63 1.2-1.1 2-1.1 1.66 0 3 1.34 3 3v3z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const name = sessionStorage.getItem('welcomeName');
            if (name) {
                alert(`Bienvenido ${name}!`);
                sessionStorage.removeItem('welcomeName'); 
            }
        });
    </script>


    
    <script src="javascript/index.js"></script>
</body>

</html>