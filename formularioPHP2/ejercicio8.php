<?php
/**
 * @author Adrián Oriola Martos
 * 8. Ejercicio 7 Calcula, dada dos fechas inicio y final introducidas por el usuario (puede ser la
 * actual y otra deseada), cuántos días, horas y minutos hay de diferencia entre dichas horas.
 */
if (isset($_GET["enviar"])) {
    $fechaInicial = strtotime($_GET["fechaInicial"]);
    $fechaFinal = strtotime($_GET["fechaFinal"]);

    $diferenciaSegundos = $fechaFinal - $fechaInicial;

    $dias = floor($diferenciaSegundos / (60 * 60 * 24));
    $horasRestantes = floor(($diferenciaSegundos % (60 * 60 * 24)) / 3600);
    $minutosRestantes = floor(($diferenciaSegundos % 3600) / 60);

    echo "Días: $dias, Horas restantes: $horasRestantes, Minutos restantes: $minutosRestantes";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola</title>
</head>

<body>
    <form action="ejercicio8.php" method="get">
        <label for="fechaInicial">Introduce la fecha inicial</label><br><br>
        <input type="datetime-local" name="fechaInicial"><br><br>
        <label for="fechaFinal">Introduce la fecha final</label><br><br>
        <input type="datetime-local" name="fechaFinal"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
</body>

</html>