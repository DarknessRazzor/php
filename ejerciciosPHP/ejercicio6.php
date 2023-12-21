<?php
/** @author Adrián Oriola Martos */

/* 
6. Calcula la media de varios números (mínimo 5) y redondea el resultado. Muestra los números
introducidos y el resultado
*/
echo "Inserta mínimo 5 números para calcular la media y redondearla \n";
$numeroUno = readline("Número 1: ");
$numeroDos = readline("Número 2: ");
$numeroTres = readline("Número 3: ");
$numeroCuatro = readline("Número 4: ");
$numeroCinco = readline("Número 5: ");
$resultado = ($numeroUno+$numeroDos+$numeroTres+$numeroCuatro+$numeroCinco) / 5; /*en la variable resultado guardamos la suma de todos los números y dividido
entre los números que hemos metido, en este caso 5*/ 
$redondo = round($resultado)."\n"; //el round es para redondear un número decimal

echo "Los números que has ingresado son: ".$numeroUno. " + ".$numeroDos. " + ".$numeroTres. " + ".$numeroCuatro. " + ".$numeroCinco. "\n"; 
echo "La media de sumar los 5 números dados es ".$resultado." y el número redondeado es ".$redondo;
?>