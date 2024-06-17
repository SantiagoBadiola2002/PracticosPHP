<?php

$figuras = [
    "cuadrado.png",
    "circulo.png",
    "triangulo.png",
    "hexagono.png",
    "rectangulo.png",
    "rombo.png",
    "trapecioIsosceles.png",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $figura_seleccionada = (int)$_POST["figura"];
    
    if ($figura_seleccionada >= 0 && $figura_seleccionada < count($figuras)) {
        $nombre_imagen = $figuras[$figura_seleccionada];
        echo "<img src=\"../archivos/imagenes/$nombre_imagen\" alt=\"$nombre_imagen\">";
    } else {
        echo "Figura seleccionada no válida.";
    }
}
?>
