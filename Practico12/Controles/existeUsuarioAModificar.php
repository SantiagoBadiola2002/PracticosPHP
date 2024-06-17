<?php
$servidor = "localhost";
$usuario = "tecnologo";
$contrasenia = "";
$database = "CURE";

$ci = $_POST['ci'];

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $database);

$consulta = "SELECT * FROM estudiante WHERE ci = '$ci'";

$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) <= 0) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación</title>
    </head>

    <body>
        <a>El usuario con ci: <?php echo $ci ?> no existe</a>
        <a href="../index.html">Volver</a>
    </body>

    </html>
<?php
} else {
    header("Location: ../Formularios/formModificarUsuario.php?ci=$ci");
    exit();
}

mysqli_close($conexion);
?>
