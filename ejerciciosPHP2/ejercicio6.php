<?php 
/**
 * @author Adrián Oriola Martos
 */
/*6. Escribe un programa que lea tres números positivos y compruebe si son iguales. Por ejemplo:
* Si la entrada fuese 5 5 5, la salida debería ser “hay tres números iguales a 5“.
* Si la entrada fuese 4 6 4, la salida debería ser “hay dos números iguales a 4“.
* Si la entrada fuese 0 1 2, la salida debería ser “no hay números iguales*/
$num1 = readline("Dime un número positivo: \n");
$num2 = readline("Dime un número positivo: \n");
$num3 = readline("Dime un número positivo: \n");

if ($num1 == $num2 && $num1 == $num3 && $num2 == $num3){
    echo "Hay tres números iguales a ".$num1."\n";
} 
else if ($num1 == $num3){
    echo "Hay dos números iguales a ".$num3."\n";
}
else if ($num1 == $num2){
    echo "Hay dos números iguales a ".$num2."\n";
}
else if ($num2 == $num3){
    echo "Hay dos números iguales a ".$num3."\n";
}
if ($num1 != $num2 && $num1 != $num3 && $num2 != $num3){
    echo "No hay números iguales\n";
}
?>