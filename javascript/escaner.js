// 1) Lógica del botón “Iniciar Escaneo”
document.getElementById('scan-form').addEventListener('submit', function (e) {
  e.preventDefault();

  const progressBar = document.getElementById('scan-progress-bar');
  const resultDiv   = document.getElementById('result');
  const scanButton  = document.getElementById('scan-button');

  scanButton.disabled = true;
  progressBar.style.width = '0%';
  document.getElementById('scan-progress').style.display = 'block';
  resultDiv.style.display = 'none';

  let width = 0;
  const interval = setInterval(() => {
    if (width >= 100) {
      clearInterval(interval);
      scanButton.disabled    = false;
      resultDiv.style.display = 'block';

      simulateTerminalOutput();
    } else {
      width += 2;
      progressBar.style.width = width + '%';
    }
  }, 50);

  const url      = document.getElementById('url-input').value;
  const scanType = document.getElementById('scan-option').value;

  document.getElementById('result-target').textContent   = url;
  document.getElementById('terminal-target').textContent = url;
  document.getElementById('terminal-command').textContent = `${scanType} ${url}`;
  document.getElementById('terminal-module').textContent  = scanType;
  document.getElementById('result-type').textContent     = scanType.toUpperCase();
});

function simulateTerminalOutput() {
  const terminal = document.querySelector('.security-app__terminal');
  terminal.innerHTML = `
    <div class="security-app__terminal-line security-app__terminal-command">
      $ fuzz ${document.getElementById('url-input').value}
    </div>
    <div class="security-app__terminal-line">
      Escaneando objetivo: ${document.getElementById('url-input').value}
    </div>
    <div class="security-app__terminal-line">
      Inicializando módulo fuzz...
    </div>
    <div class="security-app__terminal-line">
      Ejecutando verificaciones de seguridad...
    </div>
    <div class="security-app__terminal-line security-app__terminal-warning">
      Se encontraron 3 vulnerabilidades potenciales
    </div>
    <div class="security-app__terminal-line">
      Escaneo completado en 2.4 segundos
    </div>
    <div class="security-app__terminal-line security-app__terminal-success">
      Informe generado correctamente
    </div>
  `;
}

// 2) Lógica del botón “Guardar Escaneo”
document.getElementById('save-scan-button').addEventListener('click', async () => {
  const url      = document.getElementById('url-input').value.trim();
  const scanType = document.getElementById('scan-option').value;

  const terminalLines = Array.from(
    document.querySelectorAll('.security-app__terminal .security-app__terminal-line')
  ).map(lineEl => lineEl.textContent.trim());

  if (terminalLines.length === 0) {
    alert('Primero debes ejecutar un escaneo para luego guardarlo.');
    return;
  }

  const payloads = terminalLines;

  console.log('Preparando para guardar escaneo:', { scanType, url, payloads });

  try {
    const response = await fetch('php/scan.php', {
      method: 'POST',
      credentials: 'same-origin',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        scanType:    scanType,
        targetUrl:   url,
        payloadsUsed: payloads
      })
    });

    const text = await response.text();
    console.log('Respuesta del servidor:', text);

    if (!response.ok) {
      throw new Error(text || 'Error en el servidor');
    }

  } catch (err) {
    console.error('Error en save-scan-button:', err);
    alert('No se pudo guardar escaneo: ' + err.message);
  }
});
