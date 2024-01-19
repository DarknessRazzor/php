<?php 
include_once "Vehiculo.php";
class Bicicleta extends Vehiculo{
    public function verKMRecorridos(){
        return parent::verKMRecorridos();
    }
    public function hacerCaballito(){
        echo "Haz un caballito!\n";
    }
    public function ponerCadena(){
        echo "Cambiando la cadena de bici\n";
    }
    
}
?>