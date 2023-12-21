<?php
/**
 * @author Adrián Oriola Martos
 * 1. Crea un formulario sencillo donde el usuario indique su nombre y seleccione si quiere un
 * saludo o despedida. Se debe almacenar en una Cookie el usuario y el saludo y al pulsar Enviar,
 * se debe indicar los valores actuales (usuario y saludo o despedida elegidos) y los valores del
 * usuario anterior y acción elegida almacenadas en la Cookie
 */
if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    if (isset($nombre)) {
        echo "<strong>Tu nombre es:</strong> $nombre\n<br><br>";
    } else {
        echo "<strong>No has rellenado el campo de nombre, no se como te llamas</strong>\n<br><br>";
    }

    $decision = $_POST["decidir"];
    if ($decision === "saludo") {
        echo "<strong>Has decidido recibir un saludo</strong>, HOLA!\n<br><br>";
    } else {
        echo "<strong>Has decidido recibir una despedida<strong>, Adiós :(\n<br><br>";
    }

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
    <form action="ejercicio1.php" method="post" enctype="multiplatform/form-data">
        <label for="nombre">Nombre: </label><br><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="decidir">¿Quieres un saludo o una despedida?</label><br><br>
        <input type="radio" name="decidir" value="saludo">Saludo<br>
        <input type="radio" name="decidir" value="despedida">Despedida<br><br>

        <input type="submit" name="enviar" value="Enviar"><br><br>
        <?php

        $cookie_name = "ayMiCuki";
        $cookie_value = $nombre . "-" . $decision;
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
    </form>
</body>

</html>