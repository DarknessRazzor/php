<?php
/**
 * @author Adrián Oriola Martos
 * 16. Realiza un programa que resuelva una ecuación de primer grado (del tipo 2(ax - b)=0
 */
function resolverEcuacion($a, $b)
{

    $x = ($b * 2) / (2 * $a); // calcular el valor de x
    return $x;
}
$a = 2; //estas variables se pueden ir alternando dependiendo de que números quieres
$b = 4;

$resultado = resolverEcuacion($a, $b);
echo "El valor de x es: $resultado\n";
?>