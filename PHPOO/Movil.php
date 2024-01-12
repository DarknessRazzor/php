<?php
include "Terminal.php";
class Movil extends Terminal {
    public $telefono;
    public $tarifa;
    public $minutosTarifa = 0;
    public $segundosTarifa = 0;
    public $precio = 0;
    public function llama($objeto, $minutosTarifa){
        parent::llama($objeto, $minutosTarifa);
        switch($this->tarifa){
            case "rata";
                $this->precio = $this->getMinutosTarifa() * 0.06;
                break;
            case "mono";
                $this->precio = $this->getMinutosTarifa() * 0.12;
                 break;
            case "bisonte";
                $this->precio = $this->getMinutosTarifa() * 0.30;
                 break;
        }
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setNombre($tarifa){
        $this->tarifa = $tarifa;
    }
    public function getNombre(){
        return $this->tarifa;
    }
    public function setMinutosTarifa($minutosTarifa){
        $this->minutosTarifa = $minutosTarifa;
    }
    public function getMinutosTarifa(){
        return $this->minutosTarifa;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setSegundosTarifa($segundosTarifa){
        $this->segundosTarifa = $segundosTarifa;
    }
    public function getSegundosTarifa(){
        return $this->segundosTarifa;
    }
    public function __construct($telefono, $tarifa){
        $this->telefono = $telefono;
        $this->tarifa = $tarifa;
    }

    public function __toString(){
        return "Nº ".$this->getTelefono()." - ".$this->getMinutosTotales()." m y ".$this->getSegundosTotales()." s de conversación total - tarificados ".$this->getMinutosTarifa()." m y ".$this->getSegundosTarifa()." s por un importe de ".$this->getPrecio()." euros\n";
    }
}

?>