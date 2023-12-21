<?php 
/**
 * @author Adrián Oriola Martos
 */
/*3. Crea un programa que reciba una hora expresada en 
segundos transcurridos desde las 12 de la
noche y la convierta en horas, minutos y segundos */

$horaTeclado = readline("Dime una hora escrita en formato segundos: \n");

echo gmdate("H:i:s", $horaTeclado);//le pasamos los segundos que queremos pasar a formato HH:MM:SS


?>