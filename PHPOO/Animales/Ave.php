<?php 
include_once "Animal.php";
abstract class Ave extends Animal{
    public static $totalAves;

    public function setTotalAves($totalAves){
        $this->totalAves = $totalAves;
    }
    public static function getTotalAves(){
        echo  "Hay un total de ".self::$totalAnimales." aves\n";
    }
    public function ponerHuevo(){

    }
    public function __toString(){
        return parent::__toString().", un ave";
    }
}
?>