<?php
/** @author Adrián Oriola Martos */

/* 
10. Generar un número aleatorio entre 1 y 5 de modo que muestre el número y su nombre en letras
(Ejemplo: 3 – tres)
*/

$numero = rand(1,5);
if ($numero == 1){ //if para ir comparando el número y que vaya entrando en su respectivo resultado para imprimir un número y su formato escrito
    echo $numero." - Uno ";
} else if ($numero == 2){
    echo $numero." - Dos ";
} else if ($numero == 3){
    echo $numero." - Tres ";
} else if ($numero == 4){
    echo $numero." - Cuatro ";
} else {
    echo $numero." - Cinco ";
}
?>