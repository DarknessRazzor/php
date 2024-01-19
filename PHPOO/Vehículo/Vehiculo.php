<?php 
class Vehiculo {
    public $km = 0;
    public static $kilometrosTotales = 0;
    public  $kilometrosRecorridos = 0;
    public $vehiculosCreados = 0;

    public function avanza($km){
        $this->kilometrosRecorridos += $km;
        self::$kilometrosTotales += $km;
    }
    public static function verKMTotales(){
        return self::$kilometrosTotales;
    }
    public function verKMRecorridos(){
        return $this->kilometrosRecorridos;
    }
}
?>