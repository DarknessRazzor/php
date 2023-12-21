<?php 
/**
 * @author Adrián Oriola Martos
 */
/*5.Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de
acuerdo a las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de
10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5
céntimos.*/
$minutos = readline("Cuantos minutos has estado al teléfono?: \n");
$minutosNormales = 0;
$minutosExtra = 0;
$precioFinal = 0;

if ($minutos <= 3){//condicion para entrar y hacer una operación especificada, en este caso si los minutos no pasan de 3
    $minutosNormales = 10;//sabiendo cuantos minutos y el precio por minuto podemos averiguar cuanto se ha gastado al teléfono
    echo "En base a los minutos introducidos (".$minutos.") " ,"el total a pagar es ".$minutosNormales." céntimos\n";
}
if ($minutos > 3){// lo mismo que arriba pero esta vez para saber si se ha pasado de los 3 minutos y cuanto le va a costar
    $minutosExtra = ($minutos - 3);//para saber cuantos minutos extra se ha pasado a la variable minutos le descontamos los 3 minutos que sabemos lo que vale
    $minutosExtra *= 5; //a minutos extra le multiplicamos e igualamos el valor, no le incrementamos
    $minutosNormales = (10);// aqui sabemos cuantos centimos cuestan los 3 primeros minutos 
    $precioFinal = $minutosNormales + $minutosExtra;//sabemos que a los minutos que pasen por encima de 3 van a valer 5 centimos y los que esten por debajo valen 10
    echo "En base a los minutos introducidos (".$minutos.") " ,"el total a pagar es ".$precioFinal." céntimos\n";
}
?>