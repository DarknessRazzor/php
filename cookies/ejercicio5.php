<?php
/**
 * 
 * @author Adrián Oriola Martos
 * 5. Usa el formulario (Ejercicio 8 UD5) de la quincena donde se indique el día de la semana y
 * muestre la quincena guardando estos datos en una Cookie. Se deben mostrar el día y la
 * quincena actual y el día y la quincena anterior (cookie).
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
    <form action="ejercicio5.php" method="get">
        <label for="fechaInicial">Introduce la fecha inicial</label><br><br>
        <input type="datetime-local" name="fechaInicial"><br><br>
        <label for="fechaFinal">Introduce la fecha final</label><br><br>
        <input type="datetime-local" name="fechaFinal"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>
    <?php
    $cookie_name = "ayMiCuki";
    $cookie_value = $fechaInicial . "-" . $fechaFinal . "-" . $dias . "-" . $horasRestantes . "-" . $minutosRestantes;
    /*Creamos la cookie con el setcookie y le pasamos los parametros que hemos definido anteriormente y comprobamos que está creada la cookie
        si no lo está le mandamos un mensaje de error, y si funciona printeamos tanto el nombre como sus valores anteriormente definidos*/
    setcookie($cookie_name, $cookie_value);
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Ejercicio:  '" . $cookie_name . "'<br>";
        echo "Valores de la cookie: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>

</html>