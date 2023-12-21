<?php
/* Calculadora.php */
class Calculadora {
    public function sumar($a = 0, $b = 0) { //funcion para sumar dos elementos
        return $a + $b;
    }
    public function restar($a = 0, $b = 0) { //funcion para restar dos elementos
        return $a -$b;
    }
    public function multiplicar($a = 1, $b = 1) { //funcion para multiplicar dos elementos
        return $a * $b;
    }
    public function dividir($a = 1, $b = 1) { //funcion para dividir dos elementos
        return $a / $b;
    }
}

?>