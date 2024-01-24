<?php 
class Pinguino extends Ave{
    public $nombre;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function pia(){
        return "Pingüino ".$this->getNombre().": Soy un pingúino programador en PHP";
    }
    public function __toString(){
        return parent::__toString().", en concreto un pinguino";
    }
}
?>