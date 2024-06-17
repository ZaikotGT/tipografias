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
  <title>Referencias - Tu Página Web</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="imagenes/logo.ico" type="image/x-icon">
  <style>
    /* Estilos específicos para la sección Referencias */
    .references {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
      padding: 20px;
    }

    .reference-item {
      background-color: #f2f2f2;
      padding: 10px;
      text-align: center;
      overflow: hidden; /* Evitar que el texto se salga del contenedor */
      max-width: 50%; /* Establecer un ancho máximo */
    }

    .reference-item p {
      font-size: 10px; /* Ajusta el tamaño del texto según sea necesario */
      line-height: 1.4; /* Espaciado entre líneas */
      max-height: 120px; /* Altura máxima para el párrafo */
      overflow: hidden; /* Evita que el párrafo se desborde */
    }

    /* Media Queries para responsive design */
    @media screen and (max-width: 768px) {
      .references {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      }

      .reference-item {
        padding: 10px;
        font-size: 14px;
      }

      .reference-item p {
        font-size: 12px; /* Tamaño de texto más pequeño para pantallas más pequeñas */
      }
    }
  </style>
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

  <!-- Contenido de la sección Referencias -->
<section class="references-section">
  <h1>Referencias</h1>
  <p>Toda la información presente se extrae de</p>
  <ul class="references-list">
    <li>
      <h2>Referencia 1</h2>
      <p> Martín, A. I. H. (2021, noviembre 3). Artistas que crearon arte con letras. ELLE Decor. https://www.elledecor.com/es/arte/a37842930/artistas-arte-letras-tipografias/ </p>
    </li>
    <li>
      <h2>Referencia 2</h2>
      <p>Illustration-x. (s/f). Illustrationx.com. Recuperado el 2 de octubre de 2022, de https://www.illustrationx.com/sx/styles/lettering </p>
    </li>
    <li>
      <h2>Referencia 3</h2>
      <p>https://repositorio.umsa.bo. (s.f.). Recuperado el 18 de 09 de 2022, de https://repositorio.umsa.bo: https://repositorio.umsa.bo/handle/123456789/2483 </p>
    </li>
    <li>
      <h2>Referencia 4</h2>
      <p>https://repositorio.umsa.bo. (s.f.). Recuperado el 18 de 09 de 2022, de https://repositorio.umsa.bo: https://repositorio.umsa.bo/bitstream/handle/123456789/2483/L22.pdf?sequence=3&isAllowed=y</p>
    </li>
    <li>
      <h2>Referencia 5</h2>
      <p>(s.f.). Obtenido de https://www.google.com/search?q=tipografia+historia&rlz=1C1CHBF_esCO892CO892&sxsrf=ALiCzsZAlG3tBq4q-i4ZZqvvXvgSDnILvw:1667141914714&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiRlPfMm4j7</p>
    </li>
    <li>
      <h2>Referencia 6</h2>
      <p>https://www.google.com/search?q=tipografia+historia&rlz=1C1CHBF_esCO892CO892&sxsrf=ALiCzsZAlG3tBq4q-i4ZZqvvXvgSDnILvw:1667141914714&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiRlPfMm4j7AhU5bTABHWyUAakQ_AUoAXoECAEQAw&biw=1536&bih=754&dpr=1.25#imgrc=I2yoIdBmIK16h </p>
    </li>
    <li>
      <h2>Referencia 7</h2>
      <p>https://www.google.com/search?q=tipografia+historia&rlz=1C1CHBF_esCO892CO892&sxsrf=ALiCzsZAlG3tBq4q-i4ZZqvvXvgSDnILvw:1667141914714&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiRlPfMm4j7AhU5bTABHWy UAakQ_AUoAXoECAEQAw&biw=1536&bih=754&dpr=1.25#imgrc=6otfeP9skIvbF</p>
    </li>
    <li>
      <h2>Referencia 8</h2>
      <p>https://www.google.com/search?q=tipografia+historia&rlz=1C1CHBF_esCO892CO892&sxsrf=ALiCzsZAlG3tBq4q-i4ZZqvvXvgSDnILvw:1667141914714&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiRlPfMm4j7AhU5bTABHWyUAakQ_AUoAXoECAEQAw&biw=1536&bih=754&dpr=1.25#imgrc=NTim_F2hao-l6</p>
    </li>
    <li>
      <h2>Referencia 9</h2>
      <p>https://www.google.com/search?q=primer+pictograma+de+la+historia&rlz=1C1CHBF_esCO892CO892&sxsrf=ALiCzsYwhegIwTEWb4yO2eka9L9zpuvTKQ:1667148383425&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiU5bnZs4j7AhWYSjABHSUdALoQ_AUoAXoECAIQAw&biw=1536&bih=696&dpr=1.25#imgrc=</p>
    </li>
    <li>
      <h2>Referencia 10</h2>
      <p>https://editor.wix.com/html/editor/web/renderer/edit/a457b83b-0a7c-4e8e-95a6-d1b479f14938?editorSessionId=3e72dff7-4355-4404-8f85-18ad37af1240&metaSiteId=b6e2203b-010b-4593-afa5-4990ce2341c0 </p>
    </li>
    <li>
      <h2>Referencia 11</h2>
      <p>https://www.google.com/search?q=escritura+egipcia+de+la+historia&tbm=isch&ved=2ahUKEwiUpObOtoj7AhUVkIQIHaN3Bs0Q2-cCegQIABAA&oq=escritura+egipcia+de+la+historia&gs_lcp=CgNpbWcQDDI</p>
    </li>
    <li>
      <h2>Referencia 12</h2>
      <p>https://www.google.com/search?q=escritura+fenicia+de+la+historia&tbm=isch&ved=2ahUKEwilgYSKt4j7AhVMm4QIHcBLDaoQ2-cCegQIABAA&oq=escritura+fenicia+de+la+historia&gs_lcp=CgNpbWcQAzoECCMQJzoGCAAQCBAeOggIABAIEAcQHjoFCAAQgAQ6BggAEAUQHlDzB1jzJGC-KWgAcAB4AIABfogB</p>
    </li>
    <li>
      <h2>Referencia 13</h2>
      <p>https://editor.wix.com/html/editor/web/renderer/edit/a457b83b-0a7c-4e8e-95a6-d1b479f14938?editorSessionId=3e72dff7-4355-4404-8f85-18ad37af1240&metaSiteId=b6e2203b-010b-4593-afa5-4990ce2341c0</p>
    </li>
    <li>
      <h2>Referencia 14</h2>
      <p>https://www.google.com/search?q=escritura+arabe+de+la+historia&tbm=isch&ved=2ahUKEwir7dObuIj7AhVRcDABHf96Bq4Q2-cCegQIABAA&oq=escritura+arabe+de+la+historia&gs_lcp=CgNpbWcQDDoECCMQJzoICAAQCBAHEB46BQgAEIAEOgYIABAFEB46BggAEAgQHlCSCFjJImDcMWgAcAB4AIAB2AGIAdgL </p>
    </li>
    <li>
      <h2>Referencia 15</h2>
      <p>https://www.google.com/search?q=escritura+gotica+de+la+historia&tbm=isch&ved=2ahUKEwjd4MCXuYj7AhWPbDABHZEVD2gQ2-cCegQIABAA&oq=escritura+gotica+de+la+historia&gs_lcp=CgNpbWcQAzoECCMQJzoICAAQCBAHEB46BQgAEIAEOgYIABAFEB46BggAEAgQHjoICAAQBRAHEB46BggAEAcQHlD9CF </p>
    </li>
  </ul>
</section>

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