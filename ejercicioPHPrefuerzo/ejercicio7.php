<?php
/**
 * @author Adrián Oriola Martos
 */
/**
 * 7. Escribe un programa que diga cuál es la última cifra de un número entero introducido por
 * teclado
 */
$numero = readline("Dime un número de dos cifras: ");
$resultado = $numero % 10; //al dividir un numero entre 10 y coger su resto siempre nos da la ultima cifra por igual, por ejemplo 43/10 = 4,3, tenemos la ultima cifra
echo "La última cifra es ".$resultado."\n";
?>