<?php 
include_once 'Publicaciones.php';
class Revista extends Publicaciones {
    private $numero;

    public function __construct($ISBN, $titulo, $anyoPublicacion, $numero) {
        parent::__construct($ISBN, $titulo, $anyoPublicacion);
        $this->numero = $numero;
    }
    public function __toString() {
        return parent::__toString() . ", número: {$this->numero}\n";
    }
}
?>