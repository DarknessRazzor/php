<?php
/**
 * @author Adrián Oriola Martos
 * 7. Ejercicio 5 Diseña un programa que determine la cantidad total a pagar por 5 llamadas
 * telefónicas de duración a introducir por el usuario de acuerdo a las siguientes premisas: Toda
 * llamada que dure menos de 3 minutos tiene un coste de 10 céntimos. Cada minuto adicional a
 * partir de los 3 primeros es un paso de contador y cuesta 5 céntimos
 */

if (isset($_GET["enviar"])) {
    $minutos = [];
    $minutos[0] = $_GET["minutosUno"];
    $minutos[1] = $_GET["minutosDos"];
    $minutos[2] = $_GET["minutosTres"];
    $minutos[3] = $_GET["minutosCuatro"];
    $minutos[4] = $_GET["minutosCinco"];
    $costeTotal = 0;

    for ($i = 0; $i < count($minutos); $i++) {

        if ($minutos[$i] <= 3) { //condicion para entrar y hacer una operación especificada, en este caso si los minutos no pasan de 3
            $minutosNormales = 10; //sabiendo cuantos minutos y el precio por minuto podemos averiguar cuanto se ha gastado al teléfono
            echo "En base a los minutos introducidos el total a pagar es " . $minutosNormales . " céntimos<br>";
            $costeTotal += $minutosNormales;
        }
        if ($minutos[$i] > 3) { // lo mismo que arriba pero esta vez para saber si se ha pasado de los 3 minutos y cuanto le va a costar
            $minutosExtra = ($minutos[$i] - 3); //para saber cuantos minutos extra se ha pasado a la variable minutos le descontamos los 3 minutos que sabemos lo que vale
            $minutosExtra *= 5; //a minutos extra le multiplicamos e igualamos el valor, no le incrementamos
            $minutosNormales = 10; // aqui sabemos cuantos centimos cuestan los 3 primeros minutos 
            $precioFinal = $minutosNormales + $minutosExtra; //sabemos que a los minutos que pasen por encima de 3 van a valer 5 centimos y los que esten por debajo valen 10
            echo "En base a los minutos introducidos el total a pagar es " . $precioFinal . " céntimos<br>";
            $costeTotal += $precioFinal;
        }
    }
    echo "Coste total por las 5 llamadas: " . $costeTotal;
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
    <form action="ejercicio7.php" method="get" enctype="multipart/form-data">

        <label for="llamadaUno">Introduce los minutos de la primera llamada: </label><br>
        <input type="text" name="minutosUno"><br><br>

        <label for="llamadaDos">Introduce los minutos de la segunda llamada: </label><br>
        <input type="text" name="minutosDos"><br><br>

        <label for="llamadaTres">Introduce los minutos de la tercera llamada: </label><br>
        <input type="text" name="minutosTres"><br><br>

        <label for="llamadaCuatro">Introduce los minutos de la cuarta llamada: </label><br>
        <input type="text" name="minutosCuatro"><br><br>

        <label for="llamadaCinco">Introduce los minutos de la quinta llamada: </label><br>
        <input type="text" name="minutosCinco"><br><br>

        <input type="submit" name="enviar" value="Enviar llamadas"><br><br>
    </form>
</body>

</html>