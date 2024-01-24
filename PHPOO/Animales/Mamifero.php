<?php 
abstract class Mamifero extends Animal{
    public static $totalMamifero;

    public function setTotalMamiferos($totalMamifero){
        $this->totalMamifero = $$totalMamifero;
    }
    public static function getTotalMamiferos(){
        echo  "Hay un total de ".self::$totalAnimales." mamíferos\n";
    }
    public function amamantar(){

    }
    public function __construct(){

    }
    public function __toString(){
        return parent::__toString().", un mamífero";
    }
}
?>