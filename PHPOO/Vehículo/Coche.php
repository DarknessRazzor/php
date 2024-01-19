<?php 
include_once "Vehiculo.php";
class Coche extends Vehiculo{
    public function verKMRecorridos(){
        return parent::verKMRecorridos();
    }
    public function quemaRueda(){
        echo "Quemando rueda\n";
    }
    public function llenarDeposito(){
        echo "Depósito lleno\n";
    }
}
?>