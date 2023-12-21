<?php
/**
 * @author Adrián Oriola Martos
 */
/*4. Elabora un programa para determinar si una hora leída en la forma 
horas, minutos y segundos
está correctamente expresada*/
$hora = readline("Dime las horas a introducir: \n");
$minuto = readline("Dime los minutos a introducir: \n");
$segundo = readline("Dime los segundos a introducir: \n");

while ($segundo >= 60) {// bucle para que si le pasamos 61 segundos le reste 1 segundo y añada 1 minuto y 1 segundo
    $segundo -= 60;
    $minuto++;
}
while ($minuto >= 60) {// lo mismo que arriba pero para los minutos, si añadimos 61 minutos, añadirá 1 hora y 1 minuto
    $minuto -= 60;
    $hora++;
}
if ($hora > 23) {// condición para que la hora no pueda pasar de 23:59:59, si pasa a 24:00:00 no existe ya que a partir de las 23 la siguiente hora es 00
    echo "Te has pasado de día\n";
}else {
echo "Hora introducida correctamente\n";
}
?>