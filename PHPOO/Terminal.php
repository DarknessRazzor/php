<?php
class Terminal{
public $numero;
public $tiempoConversacion;
public $minutosTotales = 0;
public $segundosTotales = 0;

public function setNumero($numero){
    $this->numero = $numero;
}
public function getNumero(){
    return $this->numero;
}
public function setTiempoConversacion($tiempoConversacion){
    $this->tiempoConversacion = $tiempoConversacion;
}
public function getTiempoConversacion(){
    return $this->tiempoConversacion;
}
public function setMinutosTotales($minutosTotales){
    $this->minutosTotales = $minutosTotales;
}
public function getMinutosTotales(){
    return $this->minutosTotales;
}
public function setSegundosTotales($segundosTotales){
    $this->segundosTotales = $segundosTotales;
}
public function getSegundosTotales(){
    return $this->segundosTotales;
}
public function llama($objeto, $minutosTarifa){
    $objeto->setTiempoConversacion($objeto->getTiempoConversacion()+$minutosTarifa);
    $this->tiempoConversacion = $this->tiempoConversacion+$minutosTarifa;
    $this->minutosTarifa = round($minutosTarifa/60);
    $this->segundosTarifa = $minutosTarifa%60;
    
    $this->minutosTotales = round($this->tiempoConversacion/60);
    $this->segundosTotales = $this->tiempoConversacion%60;
}
public function __construct(){

}
}
?>