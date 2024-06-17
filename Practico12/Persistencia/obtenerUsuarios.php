<?php
$servidor = "localhost";
$usuario = "tecnologo";
$contrasenia = "";
$database = "CURE";

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $database);

$consulta = "SELECT ci, nombre, apellido, edad FROM estudiante order by apellido, nombre";

$resultado = mysqli_query($conexion, $consulta);

$estudiantes = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $estudiantes[] = $fila;
}

include ('../fpdf186/fpdf.php');

// Crear nuevo PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Títulos
$pdf->Cell(40, 10, 'CI', 1);
$pdf->Cell(50, 10, 'Nombre', 1);
$pdf->Cell(50, 10, 'Apellido', 1);
$pdf->Cell(30, 10, 'Edad', 1);
$pdf->Ln();

// Datos 
$pdf->SetFont('Arial', '', 12);
foreach ($estudiantes as $estudiante) {
    $pdf->Cell(40, 10, $estudiante['ci'], 1);
    $pdf->Cell(50, 10, $estudiante['nombre'], 1);
    $pdf->Cell(50, 10, $estudiante['apellido'], 1);
    $pdf->Cell(30, 10, $estudiante['edad'], 1);
    $pdf->Ln();
}

// Salida del PDF
$pdf->Output();

mysqli_close($conexion);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Lista de Estudiantes</h1>
    <table class="table table-striped">
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php foreach ($estudiantes as $estudiante) : ?>
            <tr>
                <td><?php echo $estudiante['ci']; ?></td>
                <td><?php echo $estudiante['nombre']; ?></td>
                <td><?php echo $estudiante['apellido']; ?></td>
                <td><?php echo $estudiante['edad']; ?></td>
            </tr>


        <?php endforeach; ?>
    </table>
    <br>
    <a href="../index.html">Volver</a>
</body>

</html>