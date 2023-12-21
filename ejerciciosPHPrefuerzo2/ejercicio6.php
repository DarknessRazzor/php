<?php
/**
 * @author Adrián Oriola Martos
 * 6. Realiza un programa que pida 8 números enteros, los almacene en un vector junto con la
 * palabra “par” o “impar” según proceda y los muestre. Además debe indicar la cantidad de
 * números en cada caso y el porcentaje de pares e impares.
 */
$tamanyo = 8;
$arrayNumeros = [];
$contador = 0;
$contador2 = 0;

for ($i = 0; $i < 8; $i++) { //bucle for con un límite de 8 elementos, iremos recorriendo el array y pidiendo números hasta un límite de 8 y a su vez mirando si es par
    // o impar y además iremos sumandoselo y printeando al % de pares e impares
    $numero = readline("Dime numeros: \n");
    if ($numero % 2 == 0) {//saber si es par
        $valor = "Par";
        $contador++;

    } else if ($numero % 2 != 0) { //saber si es impar
        $valor = "Impar";
        $contador2++;
    }
    $arrayNumeros[$numero] = $valor; //con esta sentencia conseguimos asociar a un elemento un valor, en este caso 1 => impar, elemento + valor, pusheados al array

    foreach ($arrayNumeros as $key => $valor) { //bucle foreach para poder printear el array asociativo
        echo "$key => $valor \n";
    }

    $par = ($contador / count($arrayNumeros)) * 100;
    $impar = ($contador2 / count($arrayNumeros)) * 100;
    echo "El porcentaje de números pares es: " . $par . "%\n";
    echo "El porcentaje de números impares es: " . $impar . "%\n";

}

?>