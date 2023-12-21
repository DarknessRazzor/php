<?php
/**
 * @author Adrián Oriola Martos
 * 10. Usa el formulario (Ejercicio 22 UD5) que guarde en una Cookie la preferencia del usuario de si
 *  desea o no recibir publicidad y que muestre la opción anterior y la nueva elegida en caso de que la modifique.
 */
if (isset($_GET["enviar"])) {
    $email = $_GET["correo"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El usuario con email $email ha aceptado recibir publicidad <br>";
    } else {
        echo "ERROR!<br>";
    }
    if (isset($_GET["publicidad"])) {
        echo "Acepta recibir publicidad";
    } else {
        echo "No desea recibir publicidad";
    }
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
    <h1>Formulario alta en boletín de noticias</h1>
    <form action="ejercicio10.php" method="get">
        <label for="correo">Introduce tu correo:</label><br><br>
        <input type="text" name="correo"><br><br>
        <input type="checkbox" name="publicidad">Acepto recibir publicidad<br><br>
        <input type="submit" name="enviar" value="Enviar">&nbsp;
        <input type="reset" name="borrar" value="Borrar">

    </form>
    <?php
    $cookie_name = "ayMiCuki";
    $cookie_value = $email . "-" . $_GET["publicidad"];
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