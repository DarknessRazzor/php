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
    public function __construct(){
        Animal::$totalAnimales++;
    }
    public static function consSexo($sexo){
        $lagarto = new self();
        $lagarto->setSexo($sexo);
        return $lagarto;
    }
    public static function consFull($sexo, $nombre){
        $lagarto = new self();
        $lagarto->setSexo($sexo);
        $lagarto->setNombre($nombre);
        return $lagarto;
    }
    public function dormirse(){
        echo "Lagarto ".$this->getNombre().": ZzZzZzZ\n";
    }
    public function morirse(){
        echo "Lagarto ".$this->getNombre().": Adiós!\n";
        Animal::$totalAnimales--;
    }
    public function alimentarse($comida = null){
        echo "Lagarto ".$this->getNombre().parent::alimentarse("insectos");
    }
    public function tomarSol(){
        echo "Lagarto ".$this->getNombre().": Estoy tomando el sol\n";
    }
    public function __toString(){
        return parent::__toString().", en concreto un lagarto, con sexo ".$this->getSexo().", con nombre ".$this->getNombre()."\n";
    }
}
?>