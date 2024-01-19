<?php 
abstract class Ave extends Animal{
    public $totalAves;

    public function setTotalAves($totalAves){
        $this->totalAves = $totalAves;
    }
    public static function getTotalAves(){
        return self::$totalAves;
    }
    public function ponerHuevo(){

    }
    public function __construct(){

    }
    public function __toString(){
        return "";
    }
}
?>