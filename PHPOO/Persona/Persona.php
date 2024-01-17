<?php 
include "DNI.php";
class Persona {
    use DNI;
    public $nombre;
    public $edad;
    public $DNI;
    public $sexo = "H";
    public $peso;
    public $altura;
    const INFRAPESO = -1;
    const PESO_IDEAL = 0;
    const SOBREPESO = 1;
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function getSexo(){
        return self::$sexo;
    }
    public function setDNI($DNI){
        $this->DNI = $DNI;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function __construct(){
        $this->nombre = "";
        $this->edad = 0;
        $this->DNI = "";
        $this->sexo = "H";
        $this->peso = 0;
        $this->altura = 0;
    }
    public static function consFull($nombre, $edad, $sexo, $peso, $altura){
        $persona = new self();
        $persona->nombre = $nombre;
        $persona->edad = $edad;
        $persona->comprobarSexo($sexo);
        $persona->peso = $peso;
        $persona->altura = $altura;
        return $persona;
    }
    public static function consNomEdSex($nombre, $edad, $sexo){
        $persona = new self();
        $persona->nombre = $nombre;
        $persona->edad = $edad;
        $persona->comprobarSexo($sexo);
        return $persona;
    }
    public function comprobarSexo($sexo){
        if (!$sexo == "H" || !$sexo == "M"){
            $this->setSexo("H");
        } else {
            $this->setSexo($sexo);
        }
    }
    public function strIMC(){
        $this->calcularIMC();
    }
    public function calcularIMC(){
        $imc = $this->peso / ($this->altura**2);
        if ($imc < 20){
            return self::INFRAPESO;
        } else if ($imc >= 20 && $imc<=25){
            return self::PESO_IDEAL;
        } else if ($imc >25){
            return self::SOBREPESO;
        }
    }
    public function mostrarIMC(){
        switch($this->calcularIMC()){
            case self::INFRAPESO:
            echo $this->getNombre()." Estás por debajo del IMC normal\n";
            break;
            case self::PESO_IDEAL:
            echo $this->getNombre()." Estás en tu IMC ideal\n";
            break;
            case self::SOBREPESO:
            echo $this->getNombre()." Te has pasado de tu IMC\n";
        }
    }
    public function esMayorDeEdad(){
        return ($this->edad >= 18) ? true : false;
    }
    public function __toString(){
        return "Información de la persona:\n".
        "DNI: ".$this->generarDNI()."\n".
        "Nombre: ".$this->nombre."\n".
        "Sexo: ".$this->sexo."\n".
        "Edad: ".$this->edad."\n".
        "Peso: ".$this->peso."\n".
        "Altura: ".$this->altura."\n".
        "Resultado IMC: ".$this->strIMC()."\n";
    }
}
?>