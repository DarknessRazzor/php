<?php
/**
 * @author Adrián Oriola Martos
 * 18. Escribe un programa que diga cuál es la cifra que está en el centro (o las dos del centro si el
 * número de cifras es par) de un número entero introducido por teclado
 */
$num = readline("Dime un número de cifras pares o impares: ");
$numero = str_split($num);//con esto dividimos el número en cifras individuales
$longitud = count($numero);//usamos la función count para contar la cantidad de elementos del array
if ($longitud% 2 == 0) { //condición para saber si el array es par
    $centro1 = $numero[($longitud / 2) - 1]; //si es par y tiene 4 cifras tendremos dos centros, centro 1 es igual a la longitud dividido 2 -1 que es lo mismo que decir: 4/2-1 = posicion 1
    $centro2 = $numero[$longitud / 2];

    echo "Las cifras en el centro son: $centro1 y $centro2\n";
} else {
    $centro = $numero[$longitud / 2];//si es impar va directamente a esta condición
    echo "La cifra en el centro es: $centro\n";
}

?>