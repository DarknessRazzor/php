<?php
/** @author Adrián Oriola Martos */

/* 
8. A Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera
quincena” mostrando “segunda quincena” en otro caso. 
*/
$dia = date("d, m, y"); //con el formato date podemos pedir la fecha para que el programa lo coja del ordenador, en este caso, Day - Month- Year
if ($dia <= 15){ //if para comprar si el día ingresado es menor o igual a 15
    echo "Estamos en la primera quincena ";
} else {
    echo "Estamos en la segunda quincena ";
}
/* 8.B Haz una modificación para poder leer el
día */
echo "Dime en que día estamos (en formato número)\n";

$dia = readline("Día ingresado: "); //aquí pedimos el día directamente por teclado

if($dia <= 15) { //if para comparar si el día ingresado es menor o igual a 15 
echo "Estamos en la primera quincena ";
} else {
    echo "Estamos en la segunda quincena ";
}

 ?>