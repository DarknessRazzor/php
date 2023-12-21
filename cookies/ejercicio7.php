<?php
/**
 * @author Adrián Oriola Martos
 * 7. Usa el formulario (Ejercicio 12 UD5) de la caja fuerte donde se indique la contraseña y muestre
 * las contraseñas ya introducidas y el número de intentos guardando estos datos en una Cookie.
 * Se deben mostrar la contraseña correcta, las contraseñas ya introducidas y el número de intentos (cookie).
 */
$numeroRandom = mt_rand(1000, 9999);
echo $numeroRandom;
if (isset($_POST["enviar"])) {

    $numeroInsertado = $_POST["numeroInsertado"];
    $numeroRandom = $_POST["numeroRandom"];

    if ($numeroInsertado == $numeroRandom) {
        echo "<p style='color:green;'>Enhorabuena, la caja se ha abierto, reclama tu premio!</p>";
    } else {
        echo "<p style='color:red;'>Te has equivocado, sigue intentando</p>";
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
    <form action="ejercicio7.php" method="post" enctype="multipart/form-data">
        <!-- Usamos un hidden para añadir el numeroRandom al formulario y poder cogerlo luego con el método POST y poder tratarlo -->
        <input type="hidden" name="numeroRandom" value="<?php echo $numeroRandom; ?>">

        <label for="numeroInsertado">Introduce la combinación de 4 dígitos para abrir la caja fuerte:</label>
        <input type="text" name="numeroInsertado"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    $cookie_name = "ayMiCuki";
    $cookie_value = $numeroInsertado . "-" . $numeroRandom;
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