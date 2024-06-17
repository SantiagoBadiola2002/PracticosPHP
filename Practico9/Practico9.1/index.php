<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Figuras Geométricas</title>
</head>
<body>
    <h1>Seleccione una figura geométrica</h1>
    <form action="mostrarImagen.php" method="POST">
        <label for="figura">Figuras:</label>
        <select name="figura" id="figura">
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

            foreach ($figuras as $figura) {
                $nombre_figura = pathinfo($figura, PATHINFO_FILENAME);
                echo "<option value=\"$figura\">$nombre_figura</option>";
            }
            ?>
        </select>
        <input type="submit" value="Mostrar">
    </form>
</body>
</html>