<?php 
/**
 * @author Adrián Oriola Martos
 * 2. Ejercicio 8: Genera un mensaje de modo que si el día seleccionado o introducido es menor o
 * igual que 15 muestre “primera quincena” mostrando “segunda quincena” en otro caso.
 */

$dia = $_GET["dia"];
echo "$dia\n";

if($dia <= 15) { //if para comparar si el día ingresado es menor o igual a 15 
echo "Estamos en la primera quincena ";
} else {
    echo "Estamos en la segunda quincena ";
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
<form action="ejercicio2.php" method="get" enctype="multipart/form-data">
    <label for="dia">Introduce el día (formato número):</label>
    <input type="text" name="dia"><br><br>
    <input type="submit" name="enviar" value="Enviar día"><br><br>
</form>
</body>
</html>