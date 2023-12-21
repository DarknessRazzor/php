<?php
/**
 * @author Adrián Oriola Martos
 * 12. Crea un programa para leer las notas de los alumnos de una clase, y que informe del número de 
 * alumnos cuya nota sea mayor de la media de la clase.
 */
$alumnosTotales = readline("Cuántos alumnos tienes en clase: ");
$arrayAlumnos = [];
for ($i = 0; $i < $alumnosTotales; $i++) { //for para recorrer  el array y rellenarlo con el número de alumnos dados
    $notasAlumnos = readline("Dime las notas: ");
    array_push($arrayAlumnos, $notasAlumnos);//le pasamos datos al array

}
$notaMedia = array_sum($arrayAlumnos) / count($arrayAlumnos);//con el array_sum sumamos todos los datos que tenga el array y con el /count lo dividimos por el número de elementos del array

echo "$notaMedia\n";
for ($i = 0; $i < $alumnosTotales; $i++) {//for para recorrer todos los elementos del array y con el if ver que posiciones son más altas que la nota media
    if ($arrayAlumnos[$i] > $notaMedia) {
        echo "Notas mayores que la media: ".$arrayAlumnos[$i]."\n";
    }
}


?>