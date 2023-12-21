<?php
/**
 * @author Adrián Oriola Martos
 * HUNDIR LA FLOTA
 */
$M = [];

for ($i = 0; $i < 8; $i++) { // recorremos la posición i, en este caso las filas y las rellenamos hasta un máximo de 8 posiciones
    for ($j = 0; $j < 8; $j++) { // lo mismo que arriba pero para la posición j, en este caso las columnas con un máximo de 8 posiciones
        $M[$i][$j] = 0;
        $M[0][0] = 1;
        $M[2][0] = 1;
        $M[2][2] = 1;
        $M[4][0] = 1;
        $M[0][3] = 1;
        $M[0][4] = 1;
        $M[0][5] = 1;
        $M[0][6] = 1;
        $M[2][5] = 1;
        $M[3][5] = 1;
        $M[4][5] = 1;
        $M[7][0] = 1;
        $M[7][1] = 1;
        $M[7][2] = 1;
        $M[5][1] = 1;
        $M[5][2] = 1;
        $M[5][7] = 1;
        $M[5][6] = 1;
        $M[7][6] = 1;
        $M[7][5] = 1;
        //tablero estático porque me he acordado al final de la clase de como se rellenaba la matriz
    }
}
for ($i = 0; $i < 8; $i++) { // bucle for para recorrer la posición i (filas)
    for ($j = 0; $j < 8; $j++) { // otro bucle para recorrer la posición j (columnas)

        echo ($M[$i][$j] . " "); //printear la matriz con las posiciones ya dadas
    }
    echo ("\n");
}

function disparar($M)
{
    $intentos = 0;
    $stop = false;
    for ($i = 0; $i < 8; $i++) { // recorremos la posición i, en este caso las filas y las rellenamos hasta un máximo de 8 posiciones
        for ($j = 0; $j < 8; $j++) { // lo mismo que arriba pero para la posición j, en este caso las columnas con un máximo de 8 posiciones
            echo ("Dime las coordenadas a las que quieres atacar (de 0 a 8): ");

        }
    }
    while ($intentos < 20 && $stop == false) {
        echo ("Has hundido la flota en menos de 20 intentos, eres un MASTER");
        $intentos++;
        while ($intentos > 20 && $intentos <= 30 && $stop == false) {
            echo ("Has hundido la flota entre 20 y 30 intentos, eres un EXPERT");
            $intentos++;
            $stop = true;
        }
        while ($intentos > 30 && $intentos < 50 && $stop == false) {
            echo ("Has hundido la flota entre 30 y 50 intentos, eres un CASUAL");
            $intentos++;
            $stop = true;
        }
        while ($intentos > 50 && $stop == false) {
            echo ("Has hundido la flota entre 50 o más intentos, eres un NOOB");
            $intentos++;
            $stop = true;
        }
    }

}
?>