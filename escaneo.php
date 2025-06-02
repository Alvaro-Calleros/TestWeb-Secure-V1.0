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
                <a href="index.php"><span class="logo-text">BLITZ SCAN</span> </a>
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
                <a href="index.php" class="nav-link">inicio</a>
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
            <div class="footer-bottom">
                <p class="footer-copyright">&copy; 2025 BLITZ SCAN. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

  <script src="javascript/escaner.js"></script>
  <script src="javascript/nav_movil.js"></script>
</body>

</html>