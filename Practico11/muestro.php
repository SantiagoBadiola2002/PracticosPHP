<?php
$autor = $_POST["autor"];
$titulo = $_POST["titulo"];
$cantPaginas = $_POST["cantPaginas"];

include("libro.php");

$libro = new Libro();
$libro->agregoLibro($titulo, $autor, $cantPaginas);
