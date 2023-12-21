<?php 
/**
 * @author Adrián Oriola Martos
 * 3. Escribe un programa que calcule la media aritmética de 7 notas y la muestre junto con su 
 * correspondencia en el boletín que has realizado en el ejercicio anterior
 */
$notas = 7;
$arrayBoletin = [];
for($i = 0; $i < 7; $i++){ //bucle for para recorrer el array y ponerle un limite, en este caso 7
    $tusNotas = readline("Dime las 7 notas de tu boletín, sin decimales: ");
    array_push($arrayBoletin, $tusNotas);

    $notaMedia = (array_sum($arrayBoletin))/$notas;//funcion array_sum para sumar todo lo que esté dentro del array
}
echo "La nota media es: ".$notaMedia."\n";
?>