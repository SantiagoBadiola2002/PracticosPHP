<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

echo "Bienvenido, " . $_SESSION['usuario'];
?>
