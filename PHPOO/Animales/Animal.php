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
        echo ", estoy comiendo ".$comida."\n";
    }
    public function morirse(){

    }
    public function __construct(){
        self::$totalAnimales++;
    }
    public static function consSexo($sexo){
        $static = new static();
        $static->sexo = $sexo;
        self::$totalAnimales++;
        return $static;
    }
    public static function consFull($sexo, $nombre){
        $static = new static();
        $static->sexo = $sexo;
        $static->nombre = $nombre;
        self::$totalAnimales++;
        return $static;
    }
    public function __toString(){
        return "Soy un animal";
    }
}

?>