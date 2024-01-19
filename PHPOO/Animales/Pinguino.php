<?php 
class Pinguino {
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
}
?>