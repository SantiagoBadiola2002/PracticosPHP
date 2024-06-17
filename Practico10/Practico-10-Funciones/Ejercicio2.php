<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la operación</title>
</head>
<body>
    <h2>Resultado de la operación</h2>

    <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        // Definir la función OPERO
        function OPERO($num1, $num2, $operacion) {
            switch ($operacion) {
                case '+':
                    return $num1 + $num2;
                case '-':
                    return $num1 - $num2;
                case '*':
                    return $num1 * $num2;
                case '/':
                    // Verificar si el segundo número es cero para evitar división por cero
                    if ($num2 != 0) {
                        return $num1 / $num2;
                    } else {
                        return "Error: división por cero";
                    }
                default:
                    return "Operación no válida";
            }
        }

        // Llamar a la función OPERO con los valores y la operación seleccionada
        $resultado = OPERO($num1, $num2, $operacion);

        // Mostrar el resultado
        echo "El resultado de la operación es: $resultado";
    ?>
</body>
</html>
