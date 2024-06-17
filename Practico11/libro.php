<?php
class Libro
{

    public $titulo;
    public $autor;
    public $cantPaginas;


    public function __destruct()
    {
        echo "<br>.:objeto destruido:.<br>";
    }

    public function __construct() {
        $this->titulo = "";
        $this->autor = "";
        $this->cantPaginas = 0;
    }
    
    public function agregoLibro($titulo, $autor, $cantidadPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->cantPaginas = $cantidadPaginas;
    }
    
    public function muestroLibro() {
        if ($this->existeLibro()) {
            echo "Título: " . $this->titulo . "<br>";
            echo "Autor: " . $this->autor . "<br>";
            echo "Cantidad de páginas: " . $this->cantPaginas . "<br>";
        } else {
            echo "El libro no tiene datos ingresados aún.<br>";
        }
    }
    
    public function existeLibro() {
        return !empty($this->titulo);
    }
}

