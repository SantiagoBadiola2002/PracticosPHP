<?php
if (!isset($_COOKIE["login"]) || $_COOKIE["login"] !== "true") {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <h2>Página 2</h2>
    <p>Bienvenido a la página 2.</p>
    <a href="muestro1.php">Volver a la página 1</a>
</body>
</html>
