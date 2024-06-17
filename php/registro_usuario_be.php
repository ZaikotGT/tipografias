<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //Encriptar contrasena
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
            VALUES('$nombre_completo','$correo','$usuario','$contrasena')";
    
// Verificar que no se repita el correo en la base de datos
$correo_escapado = mysqli_real_escape_string($conexion, $correo);
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo_escapado'");

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Este correo ya está registrado, intenta con otro diferente");
        window.location = "../RegistroInicio.php";
    </script>
    ';
    exit();
}

// Verificar que no se repita el usuario en la base de datos
$usuario_escapado = mysqli_real_escape_string($conexion, $usuario);
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario_escapado'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("Este nombre de usuario ya está en uso, por favor elige otro");
        window.location = "../RegistroInicio.php";
    </script>
    ';
    exit();
}

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../RegistroInicio.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Inténtalo de nuevo, Usuario no almacenado");
            window.location = "../RegistroInicio.php";
        </script>
        ';
    }

    mysqli_close($conexion);

?>