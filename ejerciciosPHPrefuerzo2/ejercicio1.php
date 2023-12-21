<?php 
/**
 * @author Adrián Oriola Martos
 * 1. Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.
 */
$dia = readline("Dime un número del 1 al 7: ");
if($dia == 1){ //iniciamos el elemento de control y comparamos si el día es igual al número que queremos imprimir
    echo "Lunes\n";
} else if($dia == 2){
    echo "Martes\n";
} else if($dia == 3){
    echo "Miércoles\n";
} else if($dia == 4){
    echo "Jueves\n";
} else if($dia == 5){
    echo "Viernes\n";
} else if($dia == 6){
    echo "Sábado\n";
} else if($dia == 7){
    echo "Domingo\n";
}
?>