<?php
$servidor = "localhost"; 
$usuario = "tecnologo"; 
$contrasenia = ""; 
$database = "CURE"; 

$ci = $_POST['ci'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $database);


$consulta = "INSERT INTO estudiante (ci, nombre, apellido, edad) VALUES ('$ci', '$nombre', '$apellido', $edad)";

if (mysqli_query($conexion, $consulta)) {
    echo "El estudiante con C.I: " . $ci . " se agregó correctamente";
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
    <a href="../index.html">Volver</a>
</body>
</html>
