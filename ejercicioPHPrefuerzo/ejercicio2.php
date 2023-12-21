<?php
/**
 * @author Adrián Oriola Martos
 */
/*2. Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base
de la pirámide debe estar formada por 9 asteriscos*/

function piramides($base) //declaramos y creamos la función para luego llamarla
{

    $espacios = 2 * $base - 2;

    for ($i = 0; $i < $base; $i++) {//con este for recorremos los espacios que se encuentren en el vortice Y
        for ($j = 0; $j < $espacios; $j++)// y con este los del vortice X 
            echo " "; //en este caso tanto en los espacios del vortice Y como el X, le printeamos un espacio (una pirámide invertida)

        $espacios = $espacios - 1;//con esta parte del código vamos quitandole espacios a la pirámide lo que va printeando asteriscos y no espacios en blanco
        for ($j = 0; $j <= $i; $j++) {//esto es lo mismo que lo anterior pero para printear * y que no este vacía la pirámide
            echo "* ";
        }
        echo "\n";
    }
}
$base = 9;
piramides($base);//llamamos a la función para activar todo el código y le pasamos sobre cuantos * queremos que tenga la pirámide de altura
?>