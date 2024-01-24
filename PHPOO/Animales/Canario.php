<?php 
include_once "Ave.php";
class Canario extends Ave{
    public $nombre;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function pia(){
        return "Canario ".$this->getNombre().": Pio pio pio";
    }
    public function __toString(){
        return parent::__toString().", en concreto un canario\n";
    }

}
?>