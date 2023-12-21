<?php 
/**
 * @author Adrián Oriola Martos
 * 11. Diseña un programa para imprimir los números impares menores que N.
 */
$N = readline("Dime un número: ");
for ($i=0; $i <= $N ; $i++) { 

    if ($i %2 !=0){
        echo "$i\n";
    }
}

?>