<?php
function encontrarMayor($arreglo) {
    // Verificar si el arreglo está vacío
    if (empty($arreglo)) {
        return null; // Devolver null si el arreglo está vacío
    }

    $mayor = $arreglo[0]; // Asignar el primer elemento como el mayor

    // Iterar sobre el arreglo para encontrar el mayor
    foreach ($arreglo as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero; // Actualizar el mayor si se encuentra un número mayor
        }
    }

    return $mayor; // Devolver el mayor número encontrado
}

// Ejemplo de uso
$arreglo = [4, 12, 6, 8, 25, 10];
echo "El mayor número es: " . encontrarMayor($arreglo);
?>