<?php
/** @author Adrián Oriola Martos */

/* 
4. Dados dos números enteros realizar operaciones de suma, resta, división y multiplicación 
y mostrar los resultados por pantalla concatenando la operación y el resultado
*/
echo "Ingresa dos números para sumar\n";

$numeroUno = readline("Número 1 "); // readline para leer un dato pasado por teclado 
$numeroDos = readline("Número 2 "); // readline para leer un dato pasado por teclado 

$resultado = $numeroUno + $numeroDos; //operación para sumar dos operandos
echo "La suma de " .$numeroUno. " + " .$numeroDos. " es " .$resultado."\n";

$resultado = $numeroUno - $numeroDos; //operación para restar dos operandos
echo "La resta de " .$numeroUno. " - " .$numeroDos. " es " .$resultado."\n";

$resultado = $numeroUno * $numeroDos; //operación para multiplicar dos operandos
echo "La multiplicacion de " .$numeroUno. " * " .$numeroDos. " es " .$resultado."\n";

$resultado = $numeroUno / $numeroDos; //operación para dividir dos operandos
echo "La division de " .$numeroUno. " / " .$numeroDos. " es " .$resultado."\n";
?>