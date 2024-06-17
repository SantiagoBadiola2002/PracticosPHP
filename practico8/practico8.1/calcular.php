<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $horas_trabajadas = $_POST["horas_trabajadas"];
    $tasa_hora = $_POST["tasa_hora"];

    $salario_total = $horas_trabajadas * $tasa_hora;

    echo "<h1>Resultado del cálculo de salario</h1>";
    echo "<p>$nombre $apellido le corresponde cobrar por sus horas trabajadas: ";
    echo number_format($salario_total, 2, ',', '.') . " pesos.</p>";
} else {
    echo "Por favor, complete el formulario.";
}
?>
