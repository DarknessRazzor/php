<?php
/**
 * @author Adrián Oriola Martos
 * 2. Crea un formulario en el que se le pida al usuario los siguientes datos: nombre y preferencia de
 * idioma, color y ciudad. Crea una Cookie que almacene estos datos y que, al recargar la página
 * por realizar una nueva selección de datos (y posiblemente usuario) muestre los datos
 * introducidos en el formulario junto con los datos obtenidos de la Cookie.
 */
if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    if (isset($nombre)) {
        echo "<strong>Tu nombre es:</strong> $nombre\n<br><br>";
    } else {
        echo "<strong>No has rellenado el campo de nombre, no se como te llamas</strong>\n<br><br>";
    }

    $decision = $_POST["decidir"];
    if ($decision === "vlc") {
        echo "<strong>Has decidido recibir la información en:</strong> Valenciano\n<br><br>";
    } else {
        echo "<strong>Has decidido recibir la información en:</strong> Español\n<br><br>";
    }

    $color = $_POST["color"];

    echo "<strong>Has elegido el color:</strong> " . $color . "\n<br><br>";

    $ciudad = $_POST["ciudad"];

    echo "<strong>Eres de:</strong> " . $ciudad . "\n<br><br>";
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
    <form action="ejercicio2.php" method="post" enctype="multiplatform/form-data">
        <label for="nombre">Nombre: </label><br><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="decidir">¿En que idioma quieres recibir la información?</label><br><br>
        <input type="radio" name="decidir" value="vlc">Valenciano<br>
        <input type="radio" name="decidir" value="esp">Castellano<br><br>

        <label for="color">¿Que color prefieres?</label><br><br>
        <select name="color" id="colores">
            <option value="azul">Azul</option>
            <option value="rojo">Rojo</option>
            <option value="amarillo">Amarillo</option>
            <option value="verde">Verde</option>
        </select><br><br>

        <label for="ciudad">¿De que ciudad eres?</label><br><br>
        <select name="ciudad" id="ciudades">
            <option value="valencia">Valencia</option>
            <option value="castellon">Castellón</option>
            <option value="alicante">Alicante</option>
        </select><br><br><br><br>


        <input type="submit" name="enviar" value="Enviar"><br><br>
        <?php

        $cookie_name = "ayMiCuki";
        $cookie_value = $nombre . "-" . $decision . "-" . $color . "-" . $ciudad;
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