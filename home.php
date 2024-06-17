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
  <title>Tu Página de Tipografía</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" href="imagenes/logo.ico" type="image/x-icon">
  <style>
    /* Estilos específicos para la sección Home */
    .home {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      grid-gap: 20px;
      padding: 20px;
    }

    .home-box {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }

    /* Media Queries para responsive design */
    @media screen and (max-width: 768px) {
      .home {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      }
    }

    @media screen and (max-width: 480px) {
      .home-box {
        padding: 10px;
        font-size: 14px;
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
          <div class="ingresar">
            <a href="php/cerrar_sesion.php">Cerrar sesion</a>
          </div>
        <nav>
  </header>

  <!-- Primera Sección -->
  <section class="seccion-1">
    <div class="contenido">
      <h2 class="titulo-principal">Tipografía</h2>
      <h3 class="subtitulo">Arte</h3>
      <a href="https://youtu.be/1KtkzEMRh8c" class="boton">Tour</a>
    </div>
  </section>

  <!-- Seccion 2 -->
  <section class="seccion-dos">
    <div class="izquierda">
      <img src="imagenes/01.png" alt="Imagen cuadrada">
    </div>
    <div class="derecha">
      <h2>Definición de tipografía</h2>
      <h3>Origen de la palabra tipografía</h3>
      <p>La palabra tipografía viene de origen griego, “tipos" en alusión a huella o golpe, viene del arte o la técnica del manejo o la composición de tipos originalmente hechos en plomo.</p>
    </div>
  </section>

  <!-- Seccion 3 -->
  <section class="seccion-tres">    
    <div class="izquierda">
      <h2>Definición</h2>
      <p>Definimos a la tipografía como el arte o técnica para reproducir comunicación mediante palabras impresas, tomando en cuenta la elegancia y eficacia. Esta se encarga también de la clasificación de las diversas fuentes bibliográficas, como la helvética, la calibre, ETC.</p>
      <div class="imagen-container">
        <img src="imagenes/02.jpg" alt="Imagen rectangular">
      </div>
    </div>
    <div class="derecha">
      <h2>Qué son las Familias Tipográficas</h2>
      <p>Es un conjunto de signos y características de signos alfabéticos y no alfabéticos, que permiten reconocerse a un sistema. Muchas de estas fueron creadas XIX y XX, por la creatividad propia de los autores, pudiendo expresar diferentes mensajes solo cambiando la tipografía gráfica. Actualmente se pueden clasificar en 4:</p>
      <div class="familias">
        <div class="familia">
          <img src="imagenes/01.png" alt="Imagen 1">
          <p>Romanas</p>
        </div>
        <div class="familia">
          <img src="imagenes/03.png" alt="Imagen 2">
          <p>Palo seco</p>
        </div>
        <div class="familia">
          <img src="imagenes/04.png" alt="Imagen 3">
          <p>Rotuladas</p>
        </div>
        <div class="familia">
          <img src="imagenes/05.jpg" alt="Imagen 4">
          <p>Decorativas</p>
        </div>
      </div>
    </div>
  </section>

<!-- Seccion 4 -->
<section class="seccion-cuatro">
  <div class="contenido">
    <h2>La historia de la Tipografía</h2>
    <p>La palabra Tipografía significa el arte y la técnica del manejo y selección de tipos de escritura. Cada época de la historia está caracterizada por un tipo de estilo dando lugar a una constante evolución en el diseño de las letras a través del tiempo que responden a proyecciones tecnológicas y artísticas.</p>
  </div>
</section>

<!-- Seccion 5 -->
<section class="seccion-cinco">
  <h2>Evolución de la tipografía</h2>
  <div class="fila">
    <div class="columna">
      <img src="imagenes/08.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>Dibujos en la pared:</h3>
        <p>Datan de los años 3500 a.C. cuando los hombres utilizaban signos y símbolos para representar actividades cotidianas y elementos naturales.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/09.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>El Pictograma:</h3>
        <p>Es un dibujo que representa una idea u objeto en el cual su pronunciación no es tenida en cuenta. El primer pictograma fue encontrado en el año 3500 a.C.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/10.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>El ideograma:</h3>
        <p>Son símbolos que representan ideas asociadas menos concretas, se basaba en un grupo de silabas que imitaban el lenguaje hablado y desarrollado entre los años 2900 a.C.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/11.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>Escritura Egipcia:</h3>
        <p>Desarrollada desde el año 1500 a.C. trayendo consigo 3 alfabetos (jeroglífico, hierático y demótico), el jeroglífico se basa en 24 símbolos consonantes.</p>
      </div>
    </div>
  </div>
  <div class="fila">
    <div class="columna">
      <img src="imagenes/12.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>Los Fenicios:</h3>
        <p>Ellos adoptan la escritura egipcia por jeroglíficos 1000 años a.C. Utilizándola para escribir en pieles y tablillas; con el tiempo lo trasmiten a los hebreos y Arameos quienes lo evolucionan y personalizan según su propia cultura, y a su vez lo adoptan los etruscos, griegos y romanos, estos últimos ya manejaban un alfabeto idéntico al actual excepto la J, la W y la V.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/13.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>El Imperio Romano:</h3>
        <p>Desarrolla el alfabeto occidental, el cual es formal y realmente avanzado, con sus conquistas lo transmiten a toda Europa a muchas lenguas que no tenían un sistema propio de escritura.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/14.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>Escritura Árabe:</h3>
        <p>Se desarrolla a partir del siglo IV d.C. esta formado por 28 consonantes y se escribe sin vocales de derecha a izquierda.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/15.jpg" alt="Ejemplo 1">
      <div class="texto">
        <h3>Escritura Gótica:</h3>
        <p>Durante el siglo X, esta fue la evolución del alfabeto Romano, dando como resultado una letra comprimida y angulosa, más rápida de escribir y aprovechando mejor el papel. En su recorrido por toda Europa surgen diferentes variantes como (Textura, Littera, Moderna, Littera Antiqua, Minúscula de Niccoli, etc).</p>
      </div>
    </div>
  </div>
</section>

<!-- Seccion 6 -->
<section class="seccion-seis">
  <h2>Tipos de Tipografía</h2>
  <div class="fila">
    <div class="columna">
      <img src="imagenes/01.png" alt="Tipo 1">
      <div class="texto">
        <h3>Romanas</h3>
        <p>Las tipografías con serifa son aquellas que cuentan con remates o terminales, que son esos pequeños adornos ubicados en los extremos de los trazos de los caracteres.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/03.png" alt="Tipo 1">
      <div class="texto">
        <h3>Palo seco</h3>
        <p>Las tipografías sin serifa o de palo seco (sans serif) se caracterizan por la ausencia de remates y terminales. Se diseñan sin serifas. Sus trazos apenas presentan contrastes.</p>
      </div>
    </div>
    <div class="columna">
      <img src="imagenes/04.png" alt="Tipo 1">
      <div class="texto">
        <h3>Cursiva</h3>
        <p>Las tipografías manuscritas también se denominan como cursivas o script. Son tipografías que representan o imitan la caligrafía a mano, por lo que en ocasiones también se les puede denominar como tipografías caligráficas.</p>
      </div>
    </div>
  </div>
</section>

<!-- Seccion 7 -->
<section class="seccion-siete">
  <div class="izquierda1">
    <h2>Tipografías con Serif</h2>
    <p>Estos tipos de caracteres pueden incluir adornos en sus extremos, adornos en sus terminaciones.

      Proporciona el efecto de tranquilidad, autoridad, dignidad y firmeza; contiene un pequeño embellecimiento (terminación) en los extremos de un carácter llamado enlace, permitiendo al ojo seguir la línea fácilmente.  
      
       Tiene cuatro categorías:
      Egipcia
      Claredon
      Italiana
      Extremos redondeados
      </p>
  </div>
  <div class="derecha1">
    <h2> Tipografías Sans serif o de palo seco</h2>
    <p>Es la tipografía que no contiene adornos, comúnmente llamada sin serifas, las letras de palo seco se usan normalmente para titulares, pero no para cuerpos o bloques de texto grandes

      Se clasifican por: Grotesca, geométrica, humanística, contraste, informal hibrida, terminación redonda, bauhus, ajustada.
      </p>
  </div>
</section>

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