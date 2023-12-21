<?php
/** @author Adrián Oriola Martos */

/* 
11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/
$euro = readline("Dime la cantidad en euros que quieras convertir a pesetas: ");

$resultado = $euro*166.386; //funcion para pasar euros a pesetas, dividiendo los euros entre las pesetas

echo "La cantidad de euros convertida a pesetas es: ".round($resultado)."\n";
?>
