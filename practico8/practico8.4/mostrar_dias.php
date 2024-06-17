<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mes = $_POST["mes"];

    $dias = 0;
    switch ($mes) {
        case 1: // Enero
        case 3: // Marzo
        case 5: // Mayo
        case 7: // Julio
        case 8: // Agosto
        case 10: // Octubre
        case 12: // Diciembre
            $dias = 31;
            break;
        case 4: // Abril
        case 6: // Junio
        case 9: // Septiembre
        case 11: // Noviembre
            $dias = 30;
            break;
        case 2: // Febrero
            // Determina si el año actual es bisiesto o no
            $anio = date("Y");
            if ((($anio % 4 == 0) && ($anio % 100 != 0)) || ($anio % 400 == 0)) {
                $dias = 29; // Año bisiesto
            } else {
                $dias = 28; // Año no bisiesto
            }
            break;
        default:
            $dias = -1; // Este caso no debería ocurrir debido a la validación en HTML
            break;
    }

    // Mostrar la cantidad de días en el mes ingresado
    if ($dias != -1) {
        echo "<h1>El mes ingresado tiene $dias días.</h1>";
    } else {
        echo "<h1>Mes inválido.</h1>";
    }
} else {
    echo "Por favor, complete el formulario.";
}
?>
