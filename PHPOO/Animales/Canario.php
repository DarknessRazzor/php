<?php 
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
}
?>