<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo "No autorizado. Debes iniciar sesión.";
    exit;
}

$userName = $_SESSION['user_name'];

$scans = [ //Datos de ejemplo, La base de datos tiene sus propios datos
    ['type' => 'Fuzz', 'date' => '2025-05-15', 'url' => 'https://ejemplo.com'],
    ['type' => 'Nmap', 'date' => '2025-05-16', 'url' => 'https://prueba.com'],
    ['type' => 'Fuzz', 'date' => '2025-05-17', 'url' => 'https://seguridad.com'],
    ['type' => 'Fuzz', 'date' => '2025-05-15', 'url' => 'https://ejemplo.com'],
    ['type' => 'Whois', 'date' => '2025-05-16', 'url' => 'https://prueba.com'],
    ['type' => 'Whatweb', 'date' => '2025-05-17', 'url' => 'https://seguridad.com'],
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLITZ SCAN</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="estilos/nav_footer.css">
  <link rel="stylesheet" href="estilos/estilos_perfil.css">
</head>


<body class="security-app">
 <nav class="navbar">
   <div class="navbar-container container">

     <div class="logo">
       <img src="imagenes/Logo.svg" alt="" class="logo-icon">
       <span class="logo-text">BLITZ SCAN</span>
     </div>
     <button class="mobile-menu-button" aria-label="Abrir menú de navegación">
       <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M4 6h16M4 12h16M4 18h16" />
       </svg>
     </button>

     <div class="nav-links">
       <a href="home_scan.php" class="nav-link">Scanner</a>
       <a href="perfil.php" class="nav-link active">Perfil</a>
       <div class="mobile-buttons">
         <a href="logout.php" class="login-button">Cerrar Sesión</a>
       </div>
     </div>

     <div class="nav-buttons">

       <span class="nav-user"><?php echo htmlspecialchars($userName); ?>!</span>
       <a href="index.php" class="regist-button">Cerrar Sesión</a>
     </div>
   </div>
 </nav>
 
 <div class="container">
   <h2 class="scan-history-title">Historial de Escaneos</h2>
   
   <?php if (!empty($scans)): ?>
     <div class="table-container">
       <table class="scan-table">
         <thead class="table-header">
           <tr>
             <th>Tipo de escaneo</th>
             <th>Fecha</th>
             <th>URL objetivo</th>
             <th>Ver contenido</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($scans as $scan): ?>
             <tr class="table-row">
               <td class="table-cell"><?= htmlspecialchars($scan['type']) ?></td>
               <td class="table-cell"><?= htmlspecialchars($scan['date']) ?></td>
               <td class="table-cell"><?= htmlspecialchars($scan['url']) ?></td>
               <td class="table-cell">
                 <button class="view-details-button">Ver</button>
               </td>
             </tr>
           <?php endforeach; ?>
         </tbody>
       </table>
     </div>
   <?php else: ?>
     <div class="no-scans">No hay escaneos registrados</div>
   <?php endif; ?>
 </div>
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
       </div>
     </div>
   </div>
 </footer>
 <script src="javascript/escaner.js"></script>
 <script src="javascript/nav_movil.js"></script>
</body>

</html>
