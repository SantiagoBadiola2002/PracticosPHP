<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre del Mes</title>
</head>
<body>
    <h2>El nombre del mes correspondiente es:</h2>
    <?php
    
    function obtenerNombreMes($numeroMes) {
        $meses = array(
            1 => "Enero",
            2 => "Febrero",
            3 => "Marzo",
            4 => "Abril",
            5 => "Mayo",
            6 => "Junio",
            7 => "Julio",
            8 => "Agosto",
            9 => "Septiembre",
            10 => "Octubre",
            11 => "Noviembre",
            12 => "Diciembre"
        );

        
        if ($numeroMes >= 1 && $numeroMes <= 12) {
            return $meses[$numeroMes];
        } else {
            return "Número de mes inválido";
        }
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroMes = $_POST["mes"];
        echo "<p>" . obtenerNombreMes($numeroMes) . "</p>";
    }
    ?>
    <p><a href="Ejercicio3.html">Volver al formulario</a></p>
</body>
</html>
