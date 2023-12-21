<?php 
/**
 * @author Adrián Oriola Martos
 * 4. Muestra los múltiplos de 5 entre 0 y 100 usando:
 * a) bucle for
 * b) bucle while
 * c) bucle do-while
 */

for ($i = 0; $i < 100; $i++) { //estructura de control for con un máximo de 100
    if ($i%5 == 0) {
        echo "$i"."\n";
    }
}
$i = 0;
while ($i <= 100) { //estructura while inicializando el contador a 0 para poder sumar iteracciones del código con un límite de 100
    if ($i%5 == 0) {
        echo "$i"."\n";
    }
    $i++;
}
$i = 0;
do { // estructura DO WHILE, la estructura do hace que siempre se entre y ejecute el código si o si y en última instancia le ponemos la condición
    if ($i%5 == 0) {
        echo "$i"."\n";
    }
    $i++;
} while ($i <= 100);

?>