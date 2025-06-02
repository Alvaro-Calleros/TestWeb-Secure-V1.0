<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLITZ SCAN - Detección de Vulnerabilidades Web</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos/estilos_index.css">
    <link rel="stylesheet" href="estilos/nav_footer.css">
</head>

<body>
        <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container container">
            <!-- Logo -->
            <div class="logo">
                <img src="imagenes/Logo.svg" alt="" class="logo-icon">
                <span class="logo-text">BLITZ SCAN</span>
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
                <a href="#hero" class="nav-link active">Inicio</a>
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
                    <p class="step-description">Introduce la dirección del sitio web que deseas analizar en el campo de entrada.</p>
                    <div class="step-image-container">
                        <img src="imagenes/link_scanner.png" alt="Ingresar URL">
                    </div>
                </div>

                <div class="step-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <!-- Step 2 -->
                <div class="step">
                    <div class="step-number">2</div>
                    <h3 class="step-title">tipo de scaneo</h3>
                    <p class="step-description">Elige el tipo de escaneo que deseas realizar según tus necesidades de seguridad.</p>
                    <div class="step-image-container">
                        <img src="imagenes/tipo_scanner.png" alt="Ingresar URL">
                    </div>
                </div>

                <div class="step-arrow">
                    <i class="fas fa-arrow-right"></i>
                </div>

                <!-- Step 3 -->
                <div class="step">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Informe Detallado</h3>
                    <p class="step-description">Recibe un informe completo con las vulnerabilidades detectadas y recomendaciones para solucionarlas.</p>
                                        <div class="step-image-container">
                        <img src="imagenes/resultado_scanner.png" alt="Ingresar URL">
                    </div>
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
                    <p><span class="gradient-text">"BLITZ SCAN"</span> es una aplicación web orientada a la
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
                    <a href="escaneo.php"><button class="about-primary-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="button-icon" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        Probar Aplicación
                    </button></a>
                    
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
                        <img src="imagenes/Logo.svg" alt="" class="footer-logo-icon">
                        <span class="footer-logo-text">BLITZ SCAN</span>
                    </div>
                    <p class="footer-description">Proyecto universitario para la detección de vulnerabilidades web
                        básicas en sitios de prueba.</p>
                </div>
            <div class="footer-bottom">
                <p class="footer-copyright">&copy; 2025 BLITZ SCAN. Todos los derechos reservados.</p>
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
    <script src="javascript/nav_movil.js"></script>
</body>

</html>