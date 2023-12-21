<?php 
/**
 * @author Adrián Oriola Martos
 * 9. Crear una matriz de tamaño 5x5 y rellenarla de la siguiente forma: la posición M[n,m] debe n = filas m = columnas
 * contener n+m. Después se debe mostrar su contenido.
 */
$M = [];

for ($n=0; $n < 5; $n++) { // recorremos la posición n, en este caso las filas y las rellenamos hasta un máximo de 5 posiciones
    for ($m=0; $m < 5; $m++) { // lo mismo que arriba pero para la posición m, en este caso las columnas con un máximo de 5 posiciones
        $M[$n][$m] = $n+$m;
    }
}
for ($n=0; $n < 5; $n++) { // bucle for para recorrer la posición n (filas)
    for ($m=0; $m < 5; $m++) { // otro bucle para recorrer la posición m (columnas)
        echo($M[$n][$m]." "); //printear la matriz con las posiciones ya dadas
    }
    echo ("\n");
}

?>