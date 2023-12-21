<?php
/**
 * @author Adrián Oriola Martos
 * 11. Crear y rellenar una tabla de tamaño 10x10, mostrar la suma de cada fila y de cada columna
 */
$M = [];

for ($n = 0; $n < 10; $n++) { // recorremos la posición n, en este caso las filas y las rellenamos hasta un máximo de 10 posiciones
    for ($m = 0; $m < 10; $m++) { // lo mismo que arriba pero para la posición m, en este caso las columnas con un máximo de 10 posiciones
        $M[$n][$m] = $n + $m;
    }
}
$suma = 0;
for ($n=0; $n < 10; $n++) { // bucle for para recorrer la posición n (filas)
    for ($m=0; $m < 10; $m++) { // otro bucle para recorrer la posición m (columnas)
        echo($M[$n][$m]." "); //printear la matriz con las posiciones ya dadas
        $suma += $M[$n][$m]; 
    }
    echo ("= "); 
    echo ($suma . " "); //printear la matriz con las posiciones ya dadas
    $suma = 0;
    echo ("\n");

}
?>