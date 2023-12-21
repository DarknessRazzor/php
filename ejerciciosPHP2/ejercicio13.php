<?php 
/**
 * @author Adrián Oriola Martos
 */
$numero1 = readline("Dime un número: ");
$numero2 = readline("Dime el exponente del número anterior: ");

$resultado = pow($numero1, $numero2);
echo "Resultado: $resultado\n"
?>