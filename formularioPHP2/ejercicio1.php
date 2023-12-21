<?php 
/**
 * @author Adrián Oriola Martos
 * 1. Ejercicio 4 añadiendo selector de operación a aplicar (pueden seleccionarse mínimo una o
 * todas las operaciones): Dados dos números enteros realizar operaciones de suma, resta, división y
 * multiplicación y mostrar los resultados por pantalla concatenando la operación (expresión con
 * operandos y operador) y el resultado. Comprueba que los datos introducidos son los esperados
 */

$numero1 = $_GET['numero1'];
echo "El primer número introducido es: $numero1<br>";

$numero2 = $_GET['numero2'];
echo "El segundo número introducido es: $numero2<br>";

$operario = $_GET['operadores'];
foreach ($operario as $operadores){
    if ($operadores == "suma"){
        echo "El resultado es: ".$numero1 + $numero2;
     } else if ($operadores == "resta"){
        echo "El resultado es: ".$numero1 - $numero2;
     } else if ($operadores == "multiplicación"){
         echo "El resultado es: ".$numero1 * $numero2;
     } else if ($operadores == "división"){
         echo "El resultado es: ".$numero1 / $numero2;
     }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola Martos</title>
</head>
<body>
<form action="ejercicio1.php" method="get" enctype="multipart/form-data">

<label for="numero1">Número 1:</label>
<input type="text" name="numero1"><br><br>

<label for="numero2">Número 2:</label>
<input type="text" name="numero2"><br><br>

<label for="selector">Selector de operaciones:</label>
    <select multiple name="operadores[]">
        <option value="suma">Sumar</option>
        <option value="resta">Restar</option>
        <option value="multiplicación">Multiplicar</option>
        <option value="división">Dividir</option>
    <select><br><br>

    <input type="submit" name="calcular" value="Calcular"><br><br>
</form>
</body>
</html>