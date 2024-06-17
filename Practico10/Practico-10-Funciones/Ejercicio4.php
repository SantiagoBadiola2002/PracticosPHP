<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres de los Meses</title>
</head>
<body>
    <h2>Los nombres de los meses comprendidos son:</h2>
    <?php
    
    function obtenerMesesEntreNumeros($numero1, $numero2) {
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

        $nombres_meses = array();

        
        if ($numero1 > $numero2) {
            $temp = $numero1;
            $numero1 = $numero2;
            $numero2 = $temp;
        }

       
        for ($i = $numero1; $i <= $numero2; $i++) {
            $nombres_meses[] = $meses[$i];
        }

        return $nombres_meses;
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        
        $nombres_meses = obtenerMesesEntreNumeros($numero1, $numero2);

        
        echo "<ul>";
        foreach ($nombres_meses as $mes) {
            echo "<li>$mes</li>";
        }
        echo "</ul>";
    }
    ?>
    <p><a href="Ejercicio4.html">Volver al formulario</a></p>
</body>
</html>
