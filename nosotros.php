<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
    <script>
      alert("Por favor, inicia sesión");
      window.location = "index.php";
    </script>
  ';
  session_destroy();
  die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nosotros - Tu Página Web</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="imagenes/logo.ico" type="image/x-icon">
</head>
<body>
  <!-- Barra de Navegación -->
  <header>
    <nav>
        <div class="logo">
            <a href="#"><img src="imagenes/lg.png" alt="Logo"></a>
        </div>
        <div class="enlaces">
            <div class="enlace"><a href="home.php">Home</a></div>
            <div class="enlace"><a href="nosotros.php">Nosotros</a></div>
            <div class="enlace"><a href="referencias.php">Referencias</a></div>
          </div>
          <div class="Salir">
            <a href="php/cerrar_sesion.php">Cerrar sesion</a>
          </div>
        <nav>
  </header>

  <!-- Contenido de la sección Nosotros -->
  <section class="nosotros">
    <h1>Sobre Nosotros</h1>
    <p>
      "Este trabajo se realiza de forma individual por un único estudiante de la UNAD, para la materia Proyecto de Ingeniería 2. El trabajo realizado es educativo, y las fuentes y demás se encuentran en las referencias. Además, se siguió la línea de proyecto realizada en la anterior materia que precede a esta. El estudiante es el responsable y único autor de este proyecto, manteniendo coherencia con la estructura planeada. Esta información es parte de un proyecto educativo.""  
    </p>
  </section>

   <!-- Video -->
   <section class="video-section">
    <h2>Pitch Multimedia Tipografía</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/RP9BPOD8EEQ" frameborder="0" allowfullscreen></iframe>
    <!-- Texto sobre el video -->
    <p>Este es el Pitch multimedia del cual se basa este trabajo, guiado por mí y mis anteriores compañeros presentados dentro del video. Fue un trabajo en conjunto, por lo cual es contenido reutilizable y de uso público para cada uno de los que participaron en su momento.</p>
  </section>
</main>

  <!-- Pie de página -->
  <footer>
    <div class="logo">
      <!-- Aquí va tu imagen de logo -->
      <img src="imagenes/logo.jpg" alt="Logo">
    </div>
    <div class="contacto">
      <p>Contacto:</p>
      <ul>
        <li><a href="mailto:deumont999@gmail.com">deumont999@gmail.com</a></li>
        <li><a href="tel:+573145222330">314-5222-330</a></li>
      </ul>
    </div>
    <div class="creditos">
      <p>Proyecto Educativo</p>
      <p>© 2023 Creado por Jhan Steeven Cruz, Con Wix.com</p>
    </div>
  </footer>
</body>
</html>
