<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cantidad_alumnos = $_POST["cantidad_alumnos"];

    if ($cantidad_alumnos > 0) {
        echo "<h1>Ingrese los nombres de los $cantidad_alumnos alumnos:</h1>";
        
        echo '<form action="procesar_nombres.php" method="POST">';
        
        for ($i = 1; $i <= $cantidad_alumnos; $i++) {
            echo "<label for='nombre_alumno_$i'>Nombre del alumno $i:</label>";
            echo "<input type='text' id='nombre_alumno_$i' name='nombre_alumno_$i' required><br><br>";
        }
        
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    } else {
        echo "<h1>Cantidad de alumnos inválida. Por favor, ingrese un número positivo.</h1>";
    }
} else {
    echo "Por favor, complete el formulario.";
}
?>
