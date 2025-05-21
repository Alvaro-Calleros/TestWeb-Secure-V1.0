document.getElementById('scan-form').addEventListener('submit', function (e) {
  e.preventDefault();

  const progressBar = document.getElementById('scan-progress-bar');
  const resultDiv = document.getElementById('result');
  const scanButton = document.getElementById('scan-button');

  scanButton.disabled = true;
  progressBar.style.width = '0%';
  document.getElementById('scan-progress').style.display = 'block';
  resultDiv.style.display = 'none';

  let width = 0;
  const interval = setInterval(() => {
    if (width >= 100) {
      clearInterval(interval);
      scanButton.disabled = false;
      resultDiv.style.display = 'block';
    } else {
      width += 2;
      progressBar.style.width = width + '%';
    }
  }, 50);

  const url = document.getElementById('url-input').value;
  const scanType = document.getElementById('scan-option').value;

  document.getElementById('result-target').textContent = url;
  document.getElementById('terminal-target').textContent = url;
  document.getElementById('terminal-command').textContent = `${scanType} ${url}`;
  document.getElementById('terminal-module').textContent = scanType;
  document.getElementById('result-type').textContent = scanType.toUpperCase();
});