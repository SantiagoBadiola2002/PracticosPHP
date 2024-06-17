<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    if ($usuario === "tecnologo" && $contraseña === "1234") {
        echo "<h1>Usuario logeado correctamente</h1>";
    } else {
        echo "<h1>Usuario y/o Contraseña es incorrecta</h1>";
    }
} else {
    echo "Por favor, complete el formulario.";
}
?>
