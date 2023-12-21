<?php
/**
 * @author Adrián Oriola Martos
 * 24. Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentando un
 * porcentaje indicado por la variable
 */
$cantidad_trabajadores = readline("Ingrese la cantidad de trabajadores: ");
$trabajadores = array();
for ($i = 0; $i < $cantidad_trabajadores; $i++) { //bucle for para rellenar el array de trabajadores hasta llegar a la cantidad que le hemos pedido por teclado
    $nombre = readline("Nombre del trabajador $i: "); //pedimos el nombre del trabajador y se lo pasamos a la posición i, para poder asociarle un salario en la posición i donde este asociado
    $salario = readline("Salario del trabajador $i: "); //con este readline le pasamos un salario al trabajador que se encuentre en la posición i 
    $trabajadores[$nombre] = $salario; // al array trabajadores le pasamos el nombre del trabajador(clave) y el salario(valor)
}
$aumento = readline("Dime el % que quieres aumentar el sueldo: ");
$salarioAumentado = (($aumento / 100)+1) * $salario;// con esta operación aumentamos el sueldo al sueldo base, ejemplo nuestra base son 1000 y queremos aumentarle un 50%, le sumaremos 500 a 1000, total 1500
echo "Al aumentar en ".$aumento."%, el sueldo es de: ".$salarioAumentado."\n";
?>