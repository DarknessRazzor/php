<?php 
/**
 * @author Adrián Oriola Martos
 * 8. Crea la tabla de multiplicar a partir de un número
 */
$numero = readline("Dime un número para crear una tabla de multiplicar: \n");
for ($i=0; $i <= 10; $i++) { 
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}

?>