<?php 
/**
 * 4. Ejercicio 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en
 * cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A
 * partir de la hora 41, se pagan a 16 euros la hora
 */

$horas = $_GET["horas"];
if ($horas <= 40){ 

    $horasNormales = ($horas * 12);
        echo "El salario a percibir es: ".$horasNormales."€\n";
    
} if($horas > 40) {

    $horasExtra = ($horas - 40);
    $horasExtra *= 16;
    $horasNormales = (40 * 12);
    $sueldo = $horasNormales + $horasExtra;
    
    echo "El salario a percibir es: ".$sueldo."€\n";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola Martos</title>
</head>
<body>
<form action="ejercicio4.php" method="get" enctype="multipart/form-data">
<label for="horas">Introduce las horas trabajadas:</label>
<input type="text" name="horas"><br><br>
<label for="horas">La hora normal se cobra a 12€</label><br><br>
<label for="horas">La hora extra se cobra a 14€</label><br><br>
<input type="submit" name="enviar" value="Enviar Horas"><br><br>
</form>
</body>
</html>