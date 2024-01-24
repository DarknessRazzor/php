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
    public function ladra(){
        return "Perro ".$this->getNombre().": Guau guau";
    }
    public function __toString(){
        return parent::__toString().", en concreto un perro ";
    }
}
?>