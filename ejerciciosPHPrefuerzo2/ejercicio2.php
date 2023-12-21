<?php 
/**
 * @author Adrián Oriola Martos
 * 2. Escribe un programa que dada una nota (entera) indique su correspondencia en el boletín (Ejemplo 5 sería SUFICIENTE)
 */
$nota = readline("Dime la nota que has sacado (de forma entera, sin decimales: ");
if($nota == 1){ //iniciamos la estructura de control y dependiendo del numero que queramos que printee lo que le pedimos
    echo "Insuficiente\n";
} else if($nota == 2){
    echo "Insuficiente\n";
} else if($nota == 3){
    echo "Insuficiente\n";
} else if($nota == 4){
    echo "Insuficiente\n";
} else if($nota == 5){
    echo "Suficiente\n";
} else if($nota == 6){
    echo "Suficiente\n";
} else if($nota == 7){
    echo "Notable bajo\n";
} else if($nota == 8){
    echo "Notable alto\n";
} else if($nota == 9){
    echo "Excelente\n";
} else if($nota == 10){
    echo "Sobresaliente\n";
}
?>