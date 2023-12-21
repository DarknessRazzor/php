<?php 
/**
 * @author Adrián Oriola Martos
 * 17. Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 3
 */
$num = readline("Dime un número para saber si es par o divisible entre 3: ");
if ($num%2 == 0){ //cogemos, dividimos el numero entre 2 y si el resto es 0 es divisible entre 2
    echo "Es par\n";
}
else if ($num%3 == 0){ //cogemos, dividimos el numero entre 3 y si el resto es 0 es divisible entre 3
    echo "Es divisible entre 3\n";
}

?>