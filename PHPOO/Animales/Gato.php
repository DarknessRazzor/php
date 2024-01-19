<?php 
class Gato extends Mamifero {
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
    public function maulla(){
        return "Gato ".$this->getNombre().": Miauuuuu";
    }
}
?>