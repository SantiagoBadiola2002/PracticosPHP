<?php
$servidor = "localhost"; 
$usuario = "tecnologo"; 
$contrasenia = ""; 
$database = "CURE"; 

$ci = $_POST['ci'];

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $database);

$consulta = "DELETE FROM estudiante WHERE ci='$ci'";

if (mysqli_query($conexion, $consulta)) {
    echo "El estudiante con C.I: $ci se eliminó correctamente";
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
</head>
<body>
    <a href="./index.html">Volver</a>
</body>
</html>
