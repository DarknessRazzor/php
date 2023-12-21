<?php 
/**
 * @author Adrián Oriola Martos
 */
/*2. Dada la fecha del sistema, indicar las horas, 
minutos y segundos junto con el día de la semana*/
date_default_timezone_set('UTC');//le damos un formato al date predeterminado, en este caso que nos coja el UTC
$fecha = date("l jS \of F Y h:i:s A");//con la l printeamos el dia, jS el dia en formato numero, 
//F para el mes, Y para el año, h para la hora, i para minutos, s para segundos
echo "La fecha es: ".$fecha."\n";

?>