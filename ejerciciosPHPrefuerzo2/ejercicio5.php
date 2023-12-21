<?php
/**
 * @author Adrián Oriola Martos
 * 5. Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
 * programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
 * “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
 * satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
 */

$intentos = 0;
$clave = 1234;
$stop = false; //elemento de control para poder parar la ejecución del código en caso de ser verdadero
while ($intentos < 4 && $stop == false) { //bucle while para tener un limite de oportunidades, en este caso 4

    $combinacion = readline("Dime la combinación de la caja fuerte (4 cifras): \n");//pedimos la combinación por teclado

    if ($combinacion == $clave) {
        echo "La caja fuerte se ha abierto satisfactoriamente\n";
        $stop = true;
    } else {
        echo "Lo siento, esa no es la combinación\n";
    }
    $intentos++;
}

?>