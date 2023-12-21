<?php
/**
 * @author Adrián Oriola Martos
 */
/**6. Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5
 */
$numeroIntroducido = readline("Introduce un número que quieras saber si es par y/o divisibles entre 5: \n");

if ($numeroIntroducido % 2 == 0) { // al aplicar el % cogemos el resto y si es igual a 0 es par si no es igual a 0 es impar
    echo "Es par\n";

} else {
    echo "No es par\n";
}
if ($numeroIntroducido % 5 == 0) { // lo mismo que anterior pero aplicandole el % al 5

    echo "Es divisible entre 5\n";
} else {

    echo "No es divisible entre 5\n";
}

?>