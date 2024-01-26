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
    public function morirse(){
        echo "Canario ".$this->getNombre().": Adiós!\n";
        Animal::$totalAnimales--;
        Ave::$totalAves--;

    }
    public function __construct(){
        Animal::$totalAnimales++;
        Ave::$totalAves++;
    }
    public static function consSexo($sexo){
        $canario = new self();
        $canario->setSexo($sexo);
        
        return $canario;
    }
    public static function consFull($sexo, $nombre){
        $canario = new self();
        $canario->setSexo($sexo);
        $canario->setNombre($nombre);
        
        return $canario;
    }
    public function alimentarse($comida = null){
        echo "Canario ".$this->getNombre().parent::alimentarse("alpiste");
    }
    public function pia(){
        echo "Canario ".$this->getNombre().": Pio pio pio\n";
    }
    public function ponerHuevo(){
        if($this->getSexo() == "M"){
        echo "Canario ".$this->getNombre().": Soy macho, no puedo poner huevos\n";
        } else {
            echo "Canario ".$this->getNombre().": He puesto un huevo!\n";
            
        }
    }
    public function __toString(){
        return parent::__toString().", en concreto un canario, con sexo ".$this->getSexo().", con nombre ".$this->getNombre()."\n";
    }
}
?>