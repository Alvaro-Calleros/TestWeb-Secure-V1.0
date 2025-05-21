<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Security Scanner</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos/style.css">
</head>

<body class="security-app">
  <header class="security-app__header">
    <div class="security-app__container">
      <div class="security-app__header-content">
        <div class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" class="logo-icon" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <span class="logo-text">TestWeb Secure</span>
        </div>
        <a href="index.php" class="security-app__back-link">Volver</a>
      </div>
    </div>
  </header>

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

  <script src="javascript/escaner.js">

  </script>
</body>

</html>