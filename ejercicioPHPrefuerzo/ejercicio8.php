<?php
/**
 * @author Adrián Oriola Martos
 */
/*8. Escribe un programa que diga cuál es la primera cifra de un número entero introducido por
teclado. Se permiten números de hasta 5*/
$numero = readline("Inserta un número de dos cifras: ");
$resultado= substr($numero, 0,1);//la funcion substr para quedarnos con una posicion especifica en este caso de dos cifras, le decimos que queremos la 
//posicion que esta entre el 0 y la 1, osea la primera cifra
echo "La primera cifra es ".$resultado."\n";
?>