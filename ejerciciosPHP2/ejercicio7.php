<?php 
/**
 * @author Adrián Oriola Martos
 */
/*7. Calcula, dada la fecha y hora actual y la fecha y hora deseada, cuántas horas y minutos quedan
para dicho momento.*/
echo "Escribe en los siguientes párrafos la información pedida con dicho formato\n";
//$diaDeseado = readline("Dime el día (ej: Miercoles): \n");
$horaDeseada = readline("Dime la hora en la que quieres estar (ej: 17): \n");
$minutoDeseado = readline("Dime los minutos (ej: 30): \n");
$segundoDeseado = readline("Dime los segundos (ej: 33): \n");
//$diaActual = date("l");
$horaActual = date("H");
$minutoActual = date("i");
$segundoActual = date("s");

$restaHoras = ((int)($horaDeseada)) - ((int)($horaActual));
$restaMinutos = ((int)($minutoDeseado)) - ((int)($minutoActual));
$restaSegundos = ((int)($segundoDeseado)) - ((int)($segundoActual));
echo "La diferencia de horas minutos y segundos entres la fecha actual y la deseada es de ".$restaHoras.",".$restaMinutos.",".$restaSegundos."\n";

?>

