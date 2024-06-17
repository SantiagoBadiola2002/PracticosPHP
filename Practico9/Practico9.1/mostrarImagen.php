<?php

$figuras = [
    "cuadrado.png",
    "circulo.png",
    "triangulo.png",
    "hexagono.png",
    "rectangulo.png",
    "rombo.png",
    "trapecioIsoceles.png",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura_seleccionada = $_POST["figura"];
    echo "<img src=\"../archivos/imagenes/$figura_seleccionada\" alt=\"$figura_seleccionada\">";

    }
?>