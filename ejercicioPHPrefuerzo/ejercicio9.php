<?php
/**
 * @author Adrián Oriola Martos
 */
/*9. Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa.
Se permiten números de hasta 5 */
$valorleido = readline("Dime un número para saber si es capicúa (debe ser de dos cifras): \n");
$numinv = 0;
$cociente = $valorleido;
while ( $cociente != 0) //bucle while para repetir el código hasta que sea 0
{
	$resto = $cociente % 10; //cogemos el resto de dividir entre 10
	$numinv = $numinv * 10 + $resto; // al numero inventado, en este caso que lo multiplicamos por 10 y le sumamos el resto de la anterior operación
	$cociente = (int)($cociente / 10);//pasamos el resultado a cociente dandole formato de integer (forzando la conversión) y dividiendo entre 10
}
if ( $valorleido == $numinv ) // valor pasado por teclado que sea igual al numer inventado
	print "El número introducido: $valorleido Es capicúa\n";
else
	print "El número introducido: $valorleido NO es capicúa\n";
?>