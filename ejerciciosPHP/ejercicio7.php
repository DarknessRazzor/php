<?php
/** @author Adrián Oriola Martos */

 /* 7. Ordena 3 números de modo que se impriman de mayor a menor. Si son iguales debe mostrar una advertencia indicando que son iguales
 */

echo "Inserta 3 números para ordenarlos de mayor a menor \n";
$num1 = readline("Primer número: ");
$num2 = readline("Segundo número: ");
$num3 = readline("Tercer número: ");
if ($num1 == $num2 && $num2 == $num3 && $num3 == $num1){ //if para ver si los números son iguales y en caso de que si saltar un error
    echo "Los números ingresados son iguales ";
} //comparamos el primer número con el segundo número
if ($num1 < $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
  }

  //comparamos el primer número con el tercer número
  if ($num1 < $num3) {
    $temp = $num1;
    $num1 = $num3;
    $num3 = $temp;
  }

  //comparamos el segundo número con el tercer número
  if ($num2 < $num3) {
    $temp = $num2;
    $num2 = $num3;
    $num3 = $temp;
  }

  
  echo "The numbers in ascending order are: $num1, $num2, $num3.";

?>
