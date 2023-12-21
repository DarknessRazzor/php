<?php
/**
 * @author Adrián Oriola Martos
 * 19. Realiza un programa que nos diga cuántos dígitos tiene un número dado
 */

function numeroDigitos()
{
    $num = readline("Dime un número: ");
    $numero = str_split($num); //con esto dividimos el número en cifras individuales
    $longitud = count($numero); //usamos la función count para contar la cantidad de elementos del array
    $contador = 0;
    for ($i = 0; $i < $longitud; $i++) {// bucle para recorrer el array e ir sumando las longitudes para saber cuantos elementos tiene el array
        $contador++;

    }
    echo "El número introducido tiene: " . $contador . " dígitos\n";
}
numeroDigitos();
?>