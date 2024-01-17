<?php 
include_once "Vehiculo.php";
class Coche extends Vehiculo{
    public function verKMRecorridos(){
        return parent::$kilometrosRecorridos;
    }
    public function quemarRueda(){
        return "Quemando rueda";
    }
    public function llenarDeposito(){
        return "Depósito lleno";
    }
    
    
}
?>