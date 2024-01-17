<?php 
class Vehiculo {
    public $km = 0;
    public static $kilometrosTotales = 0;
    public static $kilometrosRecorridos = 0;
    public $vehiculosCreados = 0;

    public function avanza($km){
        return "Has avanzado: $km kms";
    }
    public static function verKMTotales(){
        return self::$kilometrosTotales;
    }
    public function verKMRecorridos(){
        $this->kilometrosRecorridos += $this->km;
        self::$kilometrosTotales += $this->km;
    }
}
?>