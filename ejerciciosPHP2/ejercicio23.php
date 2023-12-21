<?php
/**
 * @author Adrián Oriola Martos
 * 23. Dado un vector asociativo de trabajadores con su salario, crea usando funciones el salario
 * máximo, el salario mínimo y el salario medio.
 */
$cantidad_trabajadores = readline("Ingrese la cantidad de trabajadores: ");
$trabajadores = array();
for ($i = 0; $i < $cantidad_trabajadores; $i++) { //bucle for para rellenar el array de trabajadores hasta llegar a la cantidad que le hemos pedido por teclado
    $nombre = readline("Nombre del trabajador $i: "); //pedimos el nombre del trabajador y se lo pasamos a la posición i, para poder asociarle un salario en la posición i donde este asociado
    $salario = readline("Salario del trabajador $i: "); //con este readline le pasamos un salario al trabajador que se encuentre en la posición i 
    $trabajadores[$nombre] = $salario; // al array trabajadores le pasamos el nombre del trabajador(clave) y el salario(valor)
}
$maximo = max($trabajadores); //con la función max cogerá el número mayor del array 
$minimo = min($trabajadores); //lo mismo que arriba pero con min
$medio = array_sum($trabajadores) / count($trabajadores); //aquí usamos la función sum para sumar todos los datos del array dividiendo por el número de elementos, ej: 3000+2000+1000 = 5000 / 3, con esto sacaríamos la media

echo "Salario máximo: $maximo" . "\n";
echo "Salario mínimo: $minimo" . "\n";
echo "Salario medio: $medio" . "\n";

?>