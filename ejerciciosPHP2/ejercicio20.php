<?php 
/**
 * @author Adrián Oriola Martos
 * 20. Elabora un programa que lea un número entero y escriba el número resultante de invertir el
 * orden de sus cifras Puedes usar la función creada para el ejercicio 19
 */
function numeroDigitos2()
{
    $num = readline("Dime un número: ");
    $numero = str_split($num); //con esto dividimos el número en cifras individuales
    $longitud = count($numero); //usamos la función count para contar la cantidad de elementos del array
    $contador = 0;
    for ($i = $longitud-1; $i >= 0; $i--) { // bucle para recorrer el array e ir sumando las longitudes para saber cuantos elementos tiene el array pero en negativo para ver el número del revés (invertido)
        $contador++;
        echo ($numero[$i]);
        
    }
    echo "\n";
}
numeroDigitos2();

?>