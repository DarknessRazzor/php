<?php
/**
 * @author Adrián Oriola Martos
 * 10. Crear y rellenar por teclado dos matrices de tamaño 3x3, sumarlas y mostrar su suma.
 */
$matrizUno = [];
$matrizDos = [];

//dos bucles for para filas y columnas de la matrizUno
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $rellenar = readline("Dime números para rellenar la matrizUno: \n");
        $matrizUno[$i][$j] = $rellenar;
    }
}
//dos bucles for para filas y columnas de la matrizDos
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $rellenar2 = readline("Dime números para rellenar la matrizDos: \n");
        $matrizDos[$i][$j] = $rellenar2;
    }
}
//dos bucles for para filas y columnas de la nueva matriz denominada suma para mostrar la suma de las dos matrices anteriores
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $suma[$i][$j] = $matrizUno[$i][$j] + $matrizDos[$i][$j];
    }
}
//for para printear la nueva matriz que mostrará la suma de las dos matrices anteriores
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        print_r($suma[$i][$j] . " ");
    }
    echo ("\n");
}
?>