<?php
/**
 * @author Adrián Oriola Martos
 * 15. Crea una función llamada permutaciones que reciba un vector $V y que cambie la posición de 
 * los elementos dicho vector haciendo permutaciones. Las permutaciones se harán entre los
 * elementos $V[$N-1] y $V[0], $V[$N-2] y $V[1] , $V[$N-3] y $V[2] etc. siendo $N el tamaño del vector.
 */
function permutaciones(&$V) {
    $N = count($V);
    
    for ($i = 0; $i < $N / 2; $i++) {
        // Intercambiamos los elementos simétricos en el vector
        $temp = $V[$i];
        $V[$i] = $V[$N - $i - 1];
        $V[$N - $i - 1] = $temp;
    }
}

// Ejemplo de uso:
$vector = [1, 2, 3, 4, 5];
permutaciones($vector);

echo "Vector permutado: ";
print_r($vector);

?>