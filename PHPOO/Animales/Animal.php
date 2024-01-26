<?php 
abstract class Animal{
    public $sexo = "M";
    public static $totalAnimales = 0;
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setTotalAnimales($totalAnimales){
        $this->totalAnimales = $totalAnimales;
    }
    public static function getTotalAnimales(){
        echo  "Hay un total de ".self::$totalAnimales." animales\n";
    }
    public function dormirse(){
        echo $this->getNombre().": Zzzzzzzzz\n";
    }
    public function alimentarse($comida = null){
        return ": Estoy comiendo ".$comida."\n";
    }
    public function morirse(){
        
    }
    public function __toString(){
        return "Soy un animal";
    }
}

?>