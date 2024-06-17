<?php
session_start(); 

    $usuario_valido = "root"; 
    $contrasena_valida = "123"; 

    if ($_POST['usuario'] == $usuario_valido && $_POST['contrasena'] == $contrasena_valida) {
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: bienvenido.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
?>
