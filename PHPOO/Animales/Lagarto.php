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
    public function alimentarse($comida = null){
        return "Lagarto ".$this->getNombre().", ".parent::alimentarse("insectos");
    }
    public function tomarSol(){
        return "Lagarto ".$this->getNombre().": Estoy tomando el sol";
    }
    public function __toString(){
        return parent::__toString().", en concreto un lagarto, con sexo ".$this->getSexo().", con nombre ".$this->getNombre()."\n";
    }
}
?>