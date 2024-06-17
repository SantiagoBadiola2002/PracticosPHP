<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    echo "<h1>Datos Ingresados:</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo Electrónico:</strong> $correo</p>";
    echo "<p><strong>Asunto:</strong> $asunto</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
} else {
    echo "Por favor, complete el formulario.";
}
?>
