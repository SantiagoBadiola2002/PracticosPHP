<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Materias</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <?php
        // Obtiene la cantidad de grupos desde el formulario
        $num_grupos = $_POST["num_grupos"];
        
        // Agrega un campo oculto para enviar la cantidad de grupos a resultados.php
        echo '<input type="hidden" name="num_grupos" value="' . htmlspecialchars($num_grupos) . '">';
        
        // Itera sobre los grupos para crear los campos de entrada
        for ($i = 1; $i <= $num_grupos; $i++) {
            echo "<h3>Grupo $i:</h3>";
            echo '<label for="materia' . $i . '">Nombre de la materia:</label>';
            echo '<input type="text" id="materia' . $i . '" name="materia' . $i . '" required><br>';
            
            echo '<label for="alumnos' . $i . '">Cantidad de alumnos:</label>';
            echo '<input type="number" id="alumnos' . $i . '" name="alumnos' . $i . '" required><br><br>';
        }
        ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
