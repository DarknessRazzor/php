<?php 
include_once "Animal.php";
class Lagarto extends Animal{
    public $nombre;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public static function consSexo($sexo){
        return parent::consSexo($sexo);
    }
    public static function consFull($sexo, $nombre){
        return parent::consFull($sexo, $nombre);
    }
    public function tomarSol(){
        return "Lagarto ".$this->getNombre().": Estoy tomando el sol";
    }
}
?>