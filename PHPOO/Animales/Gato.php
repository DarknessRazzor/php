<?php 
class Gato extends Mamifero{
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
        $gato = new self();
        $gato->setSexo($sexo);
        $gato->setNombre($nombre);
        return $gato;
    }
    public static function consFull($sexo, $nombre, $raza){
        $gato = new self();
        $gato->setSexo($sexo);
        $gato->setNombre($nombre);
        $gato->setRaza($raza);
        return $gato;
    }
    public function maulla(){
        echo "Gato ".$this->getNombre().": Miauuuuu\n";
    }
    public function morirse(){
        echo "Gato ".$this->getNombre().parent::morirse().": Adiós!\n";
        Animal::$totalAnimales--;
        Mamifero::$totalMamifero--;
    }
    public function alimentarse($comida = null){
        echo "Gato ".$this->getNombre().parent::alimentarse("pescado");
    }
    public function dormirse(){
        echo "Gato ".$this->getNombre().": ZzZzZzZ\n";
    }
    public function amamantar(){
        if ($this->getSexo() == "H"){
        echo "Gato ".$this->getNombre().": Amamantando a mis crías\n";
        } else {
            echo "Gato ".$this->getNombre().": Soy macho, no puedo amamantar\n";
        }
    }
    public function __toString(){
        if ($this->getNombre() == null){
            return parent::__toString().", en concreto un gato, con sexo ".$this->getSexo().", con raza ".$this->getRaza()." y no tengo nombre\n";
        }
        return parent::__toString().", en concreto un gato, con sexo ".$this->getSexo().", con raza ".$this->getRaza()." y mi nombre es ".$this->getNombre()."\n";
    }
}
?>