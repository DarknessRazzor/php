<?php 
/**
 * @author Adrián Oriola Martos
 * 
 * 7. Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y
 * “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se
 * deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo”
 * se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el
 * contenido de los tres arrays dispuesto en tres columnas
 */

 $numero = [];
 $cuadrado = [];
 $cubo = [];
for ($i=1; $i <= 20; $i++) { //primer bucle for para pasarle 20 números aleatorios y rellenarlo con $numero[$i] = $numeros
    $numeros = rand(0,100);
    $numero[$i] = $numeros;
}
for ($i=1; $i <= 20; $i++) { //segundo bucle para pasarle los números del primer array y elevarlos al cuadrado ** 2

    $cuadrado[$i] = $numero[$i] ** 2;
}
for ($i=1; $i <= 20; $i++) { //tercer bucle para pasarle los números del primer array y elevarlos al cubo ** 3
    
    $cubo[$i] = $numero[$i] ** 3;
}

for ($i=1; $i <= 20; $i++){ //cuarto bucle para recorrer las posiciones del array y printearlas con formato con el printf
    printf("%d\t%d\t%d \n", $numero[$i], $cuadrado[$i], $cubo[$i]);
}
?>