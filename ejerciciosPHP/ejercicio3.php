<?php
/** @author Adrián Oriola Martos */

/* 
3. Modifica el ejercicio anterior de modo que el nombre se muestre incluyendo otra línea con “¡Gracias por la visita!”
*/

$nombre = readline("Ingresa tu nombre: "); // readline para leer un dato pasado por teclado 
echo "Hola, $nombre ". "encantado de conocerte \n"; // colocamos el punto para concatenar Strings
echo "!Gracias por la visita!\n" // colocamos el \n para tener un salto de línea y que no se nos junten los echo

?>