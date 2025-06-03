<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLITZ SCAN</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos/style.css">
  <link rel="stylesheet" href="estilos/nav_footer.css">
</head>

<body class="security-app">
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
                <a href="#" class="nav-link active">Scanner</a>
                <a href="#index.php" class="nav-link">inicio</a>
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
  <section class="security-app__hero">
    <div class="security-app__container">
      <h1 class="security-app__title">Escáner de Seguridad<span class="security-app__version">v2.1.0</span></h1>
      <p class="security-app__subtitle">
        Analiza sitios web en busca de vulnerabilidades comunes y configuración insegura
      </p>
    </div>
  </section>

  <section class="security-app__main-content">
    <div class="security-app__container">
      <form id="scan-form" class="security-app__scan-form">
        <div class="security-app__form-group">
          <label for="url-input" class="security-app__form-label">URL a escanear</label>
          <input type="text" id="url-input" class="security-app__form-input" placeholder="https://example.com"
            required />
        </div>

        <div class="security-app__form-group">
          <label for="scan-option" class="security-app__form-label">Tipo de escaneo</label>
          <select id="scan-option" class="security-app__form-select">
            <option value="fuzz">Fuzzing</option>
            <option value="nmap">Nmap</option>
            <option value="whois">Whois</option>
            <option value="whatweb">WhatWeb</option>
          </select>
        </div>

        <div id="scan-progress" class="security-app__scan-progress">
          <div id="scan-progress-bar" class="security-app__scan-progress-bar"></div>
        </div>

        <button type="submit" class="security-app__btn" id="scan-button">Iniciar Escaneo</button>
      </form>

      <div id="result" class="security-app__result">
        <div class="security-app__result-header">
          <div class="security-app__result-title">Resultados del Escaneo</div>
          <div class="security-app__result-badge" id="result-type">FUZZ</div>
        </div>
        <div class="security-app__result-body">
          <div class="security-app__result-item">
            <span class="security-app__result-label">Objetivo:</span>
            <span id="result-target">https://example.com</span>
          </div>
          <div class="security-app__result-item">
            <span class="security-app__result-label">Estado:</span>
            <span id="result-status" style="color: var(--success); font-weight: 500;">Completado</span>
          </div>

          <div class="security-app__result-divider"></div>

          <div class="security-app__terminal">
            <div class="security-app__terminal-line security-app__terminal-command">$ <span id="terminal-command">fuzz
                https://example.com</span></div>
            <div class="security-app__terminal-line">Escaneando objetivo: <span
                id="terminal-target">https://example.com</span></div>
            <div class="security-app__terminal-line">Inicializando módulo <span id="terminal-module">fuzz</span>...
            </div>
            <div class="security-app__terminal-line">Ejecutando verificaciones de seguridad...</div>
            <div class="security-app__terminal-line security-app__terminal-warning">Se encontraron 3 vulnerabilidades
              potenciales</div>
            <div class="security-app__terminal-line">Escaneo completado en 2.4 segundos</div>
            <div class="security-app__terminal-line security-app__terminal-success">Informe generado correctamente</div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
                <p class="footer-copyright">&copy; 2025 Blitz Scan. Todos los derechos reservados.</p>
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
    
  <script src="javascript/escaner.js"></script>
  <script src="javascript/nav_movil.js"></script>
</body>

</html>