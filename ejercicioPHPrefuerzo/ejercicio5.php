<?php 
/**
 * @author Adrián Oriola Martos
 */
/**5. Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0
 */
echo "Bienvenido a las ecuaciones de primer grado\n";
$numero1 = readline("Dime el primer operando: ");
$numero2 = readline("Dime el segundo operando: ");
$numeroResultante = -$numero2/$numero1; //el resultado es el segundo numero que pasamos en formato negativo que pasa a dividir por el primer numero dado
echo "Solución: ".$numeroResultante."\n";

?>