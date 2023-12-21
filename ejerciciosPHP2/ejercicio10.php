<?php 
/**
 * @author Adrián Oriola Martos
 * 10. Genera un número entre 1 y 20 y calcula su sumatorio. Nota: El sumatorio de un número es la 
 * suma de él mismo con sus anteriores. Ejemplo ∑3=3+2+1=6
 */
$numAleatorio = rand(1,20);
$resultado = 0;
for ($i = 0; $i <= $numAleatorio; $i++) {
    $resultado = $resultado + $i;
    
}
echo "Número aleatorio: $numAleatorio\n";
echo "Resultado de sumatorio: $resultado\n";
?>