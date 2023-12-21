<?php 
/**
 * @author Adrián Oriola Martos
 * 6. Ejercicio 4: Elabora un programa para determinar si una hora leída en la forma horas, minutos
 * y segundos está correctamente expresada. Utiliza funciones para la comprobación de datos
 */
$hora = $_GET["hora"];
$minutos = $_GET["minuto"];
$segundo = $_GET["segundo"];
while ($segundo >= 60) {// bucle para que si le pasamos 61 segundos le reste 1 segundo y añada 1 minuto y 1 segundo
    $segundo -= 60;
    $minuto++;
}
while ($minuto >= 60) {// lo mismo que arriba pero para los minutos, si añadimos 61 minutos, añadirá 1 hora y 1 minuto
    $minuto -= 60;
    $hora++;
}
if ($hora > 23) {// condición para que la hora no pueda pasar de 23:59:59, si pasa a 24:00:00 no existe ya que a partir de las 23 la siguiente hora es 00
    echo "Te has pasado de día\n";
}else {
echo "Hora introducida correctamente: $hora:$minuto:$segundo\n";
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
<form action="ejercicio6.php" method="get" enctype="multipart/form-data">
    <label for="hora">Introduce las horas: </label>
    <input type="text" name="hora"><br><br>
    <label for="minuto">Introduce los minutos: </label>
    <input type="text" name="minuto"><br><br>
    <label for="segundo">Introduce los segundos: </label>
    <input type="text" name="segundo"><br><br>
    <input type="submit" name="enviar" value="Enviar horas"><br><br>
</form>
</body>
</html>