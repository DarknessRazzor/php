<?php
/**
 * @author Adrián Oriola Martos
 * 22. Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y
 * cuántos son negativos (muestra los números, la cantidad de positivos y negativos y el porcentaje de cada grupo)
 */


$lista = [];
$contador = 0;
$contador2 = 0;

for ($i = 0; $i < 10; $i++) {//for para recorrer la lista hasta un máximo de 10 números
    $numeros = readline("Dime los números que van a conformar la lista: ");
    if ($numeros >= 0) {//sentencia para que agrupe los números si son positivos (mayor a 0)
        $contador++; //contadores para ir sumando y agrupando las iteracciones del for y ver cuantos son positivos o negativos
        
    } else {
        $contador2++;
        
    }
}
echo "\n" . $contador . " son positivos\n";
echo "\n" . $contador2 . " son negativos\n";
$positivos = ($contador/10)*100;
$negativos = ($contador2/10)* 100;
echo "El porcentaje de números positivos es: ".$positivos."%\n";
echo "El porcentaje de números negativos es: ".$negativos."%\n";

//print_r($lista);
?>