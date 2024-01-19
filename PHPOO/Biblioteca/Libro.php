<?php 
include_once "Publicaciones.php";
class Libro extends Publicaciones{
    public $prestado = false;
    public function presta(){
        if (!$this->prestado) {
            $this->prestado = true;
            echo "Se ha prestado el libro '{$this->titulo}'.\n";
        } else {
            echo "No se ha podido prestar, el libro '{$this->titulo}' ya está prestado.\n";
        }
    }
    public function mostrarPrestado() {
        if ($this->prestado) {
            echo "El libro '{$this->titulo}' está prestado\n";
        } else {
            echo "El libro '{$this->titulo}' no está prestado\n";
        }
    }
    public function devuelve() {
        $this->prestado = false;
        echo "Se ha devuelto el libro '{$this->titulo}'.\n";
    }
    public function __toString() {
        $estadoPrestamo = $this->prestado ? "prestado" : "no prestado";
        return parent::__toString() . " ($estadoPrestamo)\n";
    }
}
?>