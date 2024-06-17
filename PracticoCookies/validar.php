<?php
$usuarioValido = "fulano@gmail.com";
$contraseñaValida = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $usuarioValido && $password === $contraseñaValida) {
        setcookie("login", "true", time() + 60, "/");
        header("Location: muestro1.php");
        exit;
    } else {
        echo "Credenciales incorrectas. Por favor, inténtelo de nuevo.";
    }
} else {
    header("Location: index.html");
    exit;
}
?>
