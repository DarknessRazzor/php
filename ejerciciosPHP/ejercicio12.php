<?php
/** @author Adrián Oriola Martos */

/* 
11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/
$pesetas = readline("Dime la cantidad en pesetas que quieras convertir a euros: ");

$resultado = $pesetas/166.386; //funcion para convertir pesetas a euros, multiplicando los euros por las pesetas

echo "La cantidad de pesetas convertida a euros es: ".round($resultado)."\n";
?>
