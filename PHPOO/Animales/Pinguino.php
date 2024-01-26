<?php 
class Pinguino extends Ave{
    public $nombre;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function alimentarse($comida = null){
        echo "Pingüino ".$this->getNombre().parent::alimentarse("peces");
    }
    public function programar(){
        echo "Pingüino ".$this->getNombre().": Soy un pingüino programador en PHP\n";
    }
    public function dormirse(){
        echo "Pingüino ".$this->getNombre().": ZzZzZzZ\n";
    }
    public function morirse(){
        echo "Pingüino ".$this->getNombre().parent::morirse().": Adiós!\n";
        Animal::$totalAnimales--;
        Ave::$totalAves--;
    }
    public function __construct(){
        Animal::$totalAnimales++;
        Ave::$totalAves++;
    }
    public static function consSexo($sexo){
        $pinguino = new self();
        $pinguino->setSexo($sexo);
        
        return $pinguino;
    }
    public static function consFull($sexo, $nombre){
        $pinguino = new self();
        $pinguino->setSexo($sexo);
        $pinguino->setNombre($nombre);
        
        return $pinguino;
    }
    public function ponerHuevo(){
        if($this->getSexo() == "M"){
        echo "Pingüino ".$this->getNombre().": Soy macho, no puedo poner huevos\n";
        } else {
            echo "Pingüino ".$this->getNombre().": He puesto un huevo!\n";        
            
        }
    }
    public function __toString(){
        return parent::__toString().", en concreto un pinguino, con sexo ".$this->getSexo().", con nombre ".$this->getNombre()."\n";
    }

}
?>