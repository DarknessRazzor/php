<?php
/**
 * @author ADrián Oriola Martos
 * 9. Usa el formulario (Ejercicio 21 UD5) de zona horaria donde se indique la zona horaria y
 * muestre la hora y la zona elegidas guardando estos datos en una Cookie. Se deben mostrar la
 * hora y la zona actual y la hora y la zona anterior (cookie).
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $zonaHoraria = $_POST["zona_horaria"];

    if (empty($zonaHoraria)) {
        echo "<p>Por favor, selecciona una zona horaria.</p>";
    } else {
        /*Esta función coge la fecha y hora actual dependiendo de que zona horaria hemos seleccionado*/
        date_default_timezone_set($zonaHoraria);
        /*Le damos formato al date para que solo nos printee Horas(H), Minutos(i) y Segundo(s)*/
        $horaActual = date("H:i:s");

        echo "<p>La hora actual en la zona horaria $zonaHoraria es: $horaActual</p>";
    }
    $cookie_name = "ayMiCuki";
    $cookie_value = $zonaHoraria . "-" . $horaActual;

    setcookie($cookie_name, $cookie_value);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>La hora en distintas zonas horarias</h1>
    <form method="post" action="ejercicio9.php" enctype="multipart/form-data">
        <label for="zona_horaria">Selecciona una zona horaria:</label>
        <select name="zona_horaria" required>
            <?php
            /*Con el DateTimeZone::listIdentifiers genera una lista de todas las zonas horarias del mundo
            Aquí he pedido ayuda a un amigo que trabaja con PHP porque no tenía ni idea de como hacer esto*/
            $zonasHorarias = DateTimeZone::listIdentifiers();
            foreach ($zonasHorarias as $zona) {
                echo "<option value=\"$zona\">$zona</option>";
            }
            /*Preguntar a Silvia por este método de agregar código PHP en mitad de un HTML*/
            ?>
        </select><br>

        <input type="submit" value="Obtener Hora"><br><br>
        <?php
        /*Creamos la cookie con el setcookie y le pasamos los parametros que hemos definido anteriormente y comprobamos que está creada la cookie
        si no lo está le mandamos un mensaje de error, y si funciona printeamos tanto el nombre como sus valores anteriormente definidos*/
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