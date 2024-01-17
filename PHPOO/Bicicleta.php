<?php 
include_once "Vehiculo.php";
class Bicicleta extends Vehiculo{
    public function verKMRecorridos(){
        return parent::$kilometrosRecorridos;
    }
    public function hazCaballito(){
        return "Haz un caballito!";
    }
    public function ponerCadena(){
        return "Cambiando la cadena de bici";
    }
    
}
?>