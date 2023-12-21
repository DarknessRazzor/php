<?php
/**
 * @author Adrián Oriola
 * 9. Genera un número entre 1 y 15 y calcula su factorial. Nota: El factorial de un número es la 
 * multiplicación de él mismo con sus anteriores. Ejemplo 3!=3*2*1=6
 */
$numeroAleatorio = rand(1, 15);
$resultado = 1;
for ($i = 1; $i <= $numeroAleatorio; $i++) {
    $resultado = $resultado * $i;
    
}
echo "Número aleatorio: $numeroAleatorio\n";
echo "Resultado factorial: $resultado\n";

?>
