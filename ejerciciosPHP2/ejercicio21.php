<?php 
/**
 * @author Adrián Oriola Martos
 * 21. Escribe un programa que diga cuál es la penúltima cifra de un número entero introducido por
 * teclado. Se permiten números de hasta 5 cifras. Puedes usar la función creada para el ejercicio 19
 */
$num = readline("Dime un número: ");
if($num <=99999){
    $numero = str_split($num); //con esto dividimos el número en cifras individuales
    $longitud = count($numero)-1;//con la funcion count contamos el total del array
    echo ($numero[$longitud -1])."\n";//al poner -1 conseguimos coger la penúltima cifra de cualquier número
}else{
    echo "No está permitido un número mayor de 5 cifras\n";
}
?>