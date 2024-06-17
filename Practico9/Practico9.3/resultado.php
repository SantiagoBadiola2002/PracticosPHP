<!DOCTYPE html>
<html>
<head>
    <title>Resultados del Formulario</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Resultados del Formulario</h1>
    <?php
        $num_grupos = $_POST["num_grupos"];
        
        // Inicia una tabla para mostrar los resultados
        echo '<table>';
        echo '<tr>';
        echo '<th>Grupo</th>';
        echo '<th>Materia</th>';
        echo '<th>Cantidad de Alumnos</th>';
        echo '</tr>';
        
        // Itera sobre los grupos para mostrar los datos ingresados
        for ($i = 1; $i <= $num_grupos; $i++) {
            $materia = $_POST['materia' . $i];
            $alumnos = $_POST['alumnos' . $i];
            
            // Muestra los resultados en una fila de la tabla
            echo '<tr>';
            echo '<td>Grupo ' . $i . '</td>';
            echo '<td>' . htmlspecialchars($materia) . '</td>';
            echo '<td>' . htmlspecialchars($alumnos) . '</td>';
            echo '</tr>';
        }
        
        echo '</table>';
    ?>
</body>
</html>
