<?php 
include_once "Mamifero.php";
class Perro extends Mamifero{
    public $nombre;
    public $raza;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setRaza($raza){
        $this->raza = $raza;
    }
    public function getRaza(){
        return $this->raza;
    }
    public function __construct(){
        Animal::$totalAnimales++;
        Mamifero::$totalMamifero++;
    }
    public static function consSexoNombre($sexo, $nombre){
        $perro = new self();
        $perro->setSexo($sexo);
        $perro->setNombre($nombre);
       
        return $perro;
    }
    public static function consFull($sexo, $nombre, $raza){
        $perro = new self();
        $perro->setSexo($sexo);
        $perro->setNombre($nombre);
        $perro->setRaza($raza);
       
        return $perro;
    }
    public function alimentarse($comida = null){
        echo "Perro ".$this->getNombre().parent::alimentarse("carne");
    }
    public function ladra(){
        echo "Perro ".$this->getNombre().": Guau guau\n";
    }
    public function amamantar(){
        if ($this->getSexo() == "H"){
        echo "Perro ".$this->getNombre().": Amamantando a mis crías\n";
        } else {
            echo "Perro ".$this->getNombre().": Soy macho, no puedo amamantar\n";
        }
    }
    public function morirse(){
        echo "Perro ".$this->getNombre().parent::morirse().": Adiós!\n";
        Animal::$totalAnimales--;
        Mamifero::$totalMamifero--;
    }
    public function dormirse(){
        echo "Perro ".$this->getNombre().": ZzZzZzZ\n";
    }
    public function __toString(){
        if ($this->getNombre() == null){
            return parent::__toString().", en concreto un perro, con sexo ".$this->getSexo()." con raza ".$this->getRaza()." y no tengo nombre\n";
        }
        return parent::__toString().", en concreto un perro, con sexo ".$this->getSexo()." con raza ".$this->getRaza()." y mi nombre es ".$this->getNombre()."\n";
    }
}
?>