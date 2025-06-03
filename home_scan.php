<?php
// escaneo.php
session_start();

// Si no hay usuario en sesión, lo redirigimos al login
if (!isset($_SESSION['user_id'])) {
    header('Location: session.php');
    exit;
}

$userName = $_SESSION['user_name'];
?>
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
       <a href="perfil.php" class="nav-link">Perfil</a>
       <!-- Si ya está logueado, mostramos solo en móvil un enlace de “Cerrar Sesión” -->
       <div class="mobile-buttons">
         <!-- Puedes tener un logout.php que destruya la sesión -->
         <a href="logout.php" class="login-button">Cerrar Sesión</a>
       </div>
     </div>

     <!-- Botones SOLO para desktop -->
     <div class="nav-buttons">
       <!-- En lugar de “Iniciar Sesión” / “Registrar”, mostramos “Hola, {Nombre}” y “Cerrar Sesión” -->
       <span class="nav-user"><?php echo htmlspecialchars($userName); ?>!</span>
       <a href="index.php" class="regist-button">Cerrar Sesión</a>
     </div>
   </div>
 </nav>

 <section class="security-app__hero">
   <div class="security-app__container">
     <h1 class="security-app__title">Escáner de Seguridad<span class="security-app__version">v2.1.0</span></h1>
     <p class="security-app__subtitle">
      Hola de nuevo, <?php echo htmlspecialchars($userName); ?>!  Analiza sitios web como un Pentester profesional
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

        <!-- Nuevo botón: Guardar Escaneo -->
        <button type="button" class="security-app__btn security-app__btn--secondary" style="margin-top: 16px;" id="save-scan-button">
          Guardar Escaneo
        </button>

        <!-- Nuevo botón: Generar Reporte con IA -->
        <button type="button" class="security-app__btn security-app__btn--secondary" style="margin-top: 16px;" id="ai-report-button">
          Generar Reporte con IA
        </button>
     </form>

     <div id="result" class="security-app__result" style="display: none;">
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
           <div class="security-app__terminal-line">Inicializando módulo <span
               id="terminal-module">fuzz</span>...</div>
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
         <!-- … íconos sociales … -->
       </div>
     </div>
   </div>
 </footer>
 <script src="javascript/escaner.js"></script>
 <script src="javascript/nav_movil.js"></script>
</body>

</html>
