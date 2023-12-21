<?php
/** @author Adrián Oriola Martos */

/* 
9. Dado un precio aleatorio entre 10 y 90, devolver mensaje “la cantidad es de “ indicando a
continuación el número obtenido
*/
$numero = rand(10,90);//la funcion rand sirve para randomizar un número, a continuación le pasamos sobre que dos rangos queremos que randomice el número

echo "La cantidad es de: " .$numero. ".";
?>