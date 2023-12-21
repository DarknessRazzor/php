<?php
/**
 * @author Adrián Oriola Martos
 * 13. Diseñar la función operaMatriz, a la que se le pasa dos matrices de enteros positivos mayores de
 * 0 y la operación que se desea realizar: sumar, restar, multiplicar o dividir (mediante un carácter:
 * 's', 'r', 'm', 'd'). La función debe imprimir las matrices originales, indicar la operación a realizar y
 * la matriz con los resultados
 */
$matrizUno = [];
$matrizDos = [];
$matrizTres = [];

$longitud = readline("De cuanto quieres la matriz: ");
for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud; $j++) { //recorremos las posiciones I y J de la matrizUno y la rellenamos
        $matrizUno[$i][$j] = rand(1,10);
        printf("%d\t", $matrizUno[$i][$j]); //printeo de matriz con formato
    }
    echo ("\n");
}
echo ("\n");
for ($i = 0; $i < $longitud; $i++) {
    for ($j = 0; $j < $longitud; $j++) { //recorremos las posiciones I y J de la matrizDos y la rellenamos 
        
        $matrizDos[$i][$j] = rand(1,10);
        printf("%d\t", $matrizDos[$i][$j]); //printeo de matriz con formato
    }
    echo ("\n");
}



function operaMatriz($matrizUno, $matrizDos) //funcion a la que le pasamos las dos matrices para Sumar, Restar, Multiplicar o Dividr
{
    $operacion = readline("Dime que operación quieres hacer: 's' SUMAR, 'r' RESTAR, 'm' MULTIPLICAR, 'd' DIVIDIR: ");
    $longitud = count($matrizUno);
    if ($operacion == "s") { //si es la suma, sumamos las posiciones de la matriz uno y la matriz dos y almacenamos en la I y J de la matriz tres
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud; $j++) {
                $matrizTres[$i][$j] = $matrizUno[$i][$j] + $matrizDos[$i][$j];
                echo ($matrizTres[$i][$j] . " ");
            }
            echo ("\n");
        }
    } else if ($operacion == "r") { //si es la resta, restamos las posiciones de la matriz uno y la matriz dos y almacenamos en la I y J de la matriz tres
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud; $j++) {
                $matrizTres[$i][$j] = $matrizUno[$i][$j] - $matrizDos[$i][$j];
                echo ($matrizTres[$i][$j] . " ");
            }
            echo ("\n");
        }
    } else if ($operacion == "m") { //para la multiplicación es un poco más complejo, el resultado tiene que ser acumulativo por eso para rellenar la matriz tres se le pone +=
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud; $j++) {
                $matrizTres[$i][$j] = 0;
                for ($k = 0; $k < $longitud; $k++)
                    $matrizTres[$i][$j] += $matrizUno[$i][$j] * $matrizDos[$i][$j];
                    echo ($matrizTres[$i][$j] . " ");
                }
                echo ("\n");
        }
    } else if ($operacion == "d") { //si es la división, dividimos las posiciones de la matriz uno y la matriz dos y almacenamos en la I y J de la matriz tres
        for ($i = 0; $i < $longitud; $i++) {
            for ($j = 0; $j < $longitud; $j++) {
                $matrizTres[$i][$j] = $matrizUno[$i][$j] / $matrizDos[$i][$j];
                echo ($matrizTres[$i][$j] . " ");
            }
            echo ("\n");
        }
    }
}
operaMatriz($matrizUno, $matrizDos); //llamar a la función con las matrices
?>