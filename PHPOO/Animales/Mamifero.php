<?php 
abstract class Mamifero extends Animal{
    public $totalMamifero;

    public function setTotalMamifero($totalMamifero){
        $this->totalMamifero = $$totalMamifero;
    }
    public function getTotalMamifero(){
        return self::$totalMamifero;
    }
    public function amamantar(){

    }
    public function __construct(){

    }
    public function __toString(){
        return "";
    }
}
?>