<?php 
/**
 * @author Adrián Oriola Martos
 * 12. Crear un programa para introducir números por teclado mientras su suma no alcance o iguale a 1000. 
 * Cuando ésto ocurra, debes mostrar los números introducidos, cuántos son, el total de la
 * suma y la media de todos ellos
 */
$arrayNumeros = [];
$numeros = readline("Dime números: ");
$suma = $numeros;
while ($suma <= 1000){ // bucle while para saber que se cumple una condición, en este caso que la suma de los números no supere 1000
    $numerito = readline("Dime números: ");
    $suma += $numerito; // a la variante suma le sumamos y acumulamos al numero ya existente el siguiente número que le pasemos
    array_push($arrayNumeros, $numerito); //función array_push para subir datos al array
    array_push($arrayNumeros, $numero);
    $numeroMedio = $suma/count($arrayNumeros); // operación para hacer la media del array, dividiendo la suma de sus elementos y dividiendo entre los elementos que tiene el array
    
    echo ("La suma total de sus números es: ".$suma."\n");
    echo ("La media es: ".$numeroMedio."\n");
}



?>