<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Figuras Geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Seleccione una figura geométrica</h1>

    <?php
    $figuras = [
        ["Círculo", "circulo.png"],
        ["Cuadrado", "cuadrado.png"],
        ["Triángulo", "triangulo.png"],
        ["Rectángulo", "rectangulo.png"],
        ["Hexagono", "hexagono.png"],
        ["Rombo", "rombo.png"],
        ["TrapecioIsoceles", "trapecioIsoceles.png"],
    ];

    echo '<table class="table">';
    echo "<tr><th>Número</th><th>Nombre</th></tr>";

    foreach ($figuras as $index => $figura) {
        $numero = $index + 1; // Asignar un número a cada figura
        $nombre = $figura[0];
        $archivo = $figura[1];

        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>$nombre</td>";
        echo "</tr>";
    }

    echo "</table>"
    ?>

    <h1>
        <form action="mostrarImagen.php" method="POST">
            <label for="figura">Nº Figura:</label>
            <select name="figura" id="figura">
                <?php
                foreach ($figuras as $index => $figura) {
                    $numero = $index + 1;
                    echo "<option value=\"$index\">{$numero}</option>";
                }
                ?>
            </select>
            <input type="submit" value="Mostrar">
        </form>
</body>

</html>