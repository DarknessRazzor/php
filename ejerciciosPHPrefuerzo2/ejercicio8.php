<?php
/**
 * @author Adrián Oriola Martos
 * 8. Leer por teclado y rellenar dos vectores de 10 números enteros y mezclarlos en un tercer vector
 * de la forma: el 1º de A, el 1º de B, el 2º de A, el 2º de B, etc.
 */
$vector = [];
$vector2 = [];
$vector3 = [];
$contador1 = 0;
$contador2 = 0;
for ($i = 0; $i < 10; $i++) { //bucle for para rellenar un vector con un límite de 10 números
    $vectores = readline("Dime números enteros: ");
    array_push($vector, $vectores);

}
for ($i = 0; $i < 10; $i++) { //bucle for para rellenar el segundo vector con un límite de 10 números
    $vectores2 = readline("Dime números enteros otra vez: ");
    array_push($vector2, $vectores2);
}

for ($i = 0; $i < 20; $i++) { //for para recorrer un tercer vector, en este caso con un límite de 20 números porque son la suma de los dos vectores de 10 números cada uno
    if ($i % 2 == 0) {
        array_push($vector3, $vector[$contador1]);
        $contador1++;

    } else {
        array_push($vector3, $vector2[$contador2]);
        $contador2++;
    }

}
for ($i = 0; $i < 10; $i++) { //este for se usa para printear todos los elementos de los dos vectores
    printf("A: %d\tB: %d\t\n", $vector[$i], $vector2[$i]);
}
for ($i = 0; $i < 20; $i++) { // y con este for recorremos y printeamos los elementos del vector 3
    printf("%d\t\n", $vector3[$i]);
}
?>