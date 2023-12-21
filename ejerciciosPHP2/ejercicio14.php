<?php
/**
 * @author Adrián Oriola Martos
 * 14. Escribe una función que calcule todas las potencias de un número hasta llegar al exponente 
 * indicado, las almacene en un vector y muestre el resultado de cada potencia indicando además 
 * la suma de todas las potencias incluyendo la del exponente indicado.
 */
$numero = readline("Dime un número: ");
$exponente = readline("Dime un exponente: ");
$vector = [];
$resultado;
for ($i = 1; $i <= $exponente; $i++) {
    $resultado = pow($numero, $i);
    array_push($vector, $resultado);
    echo "$resultado\n";
}

?>