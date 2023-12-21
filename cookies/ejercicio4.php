<?php
/**
 * @author Adrián Oriola Martos
 * 4. Usa el formulario (Ejercicio 3 UD5) del conversor euros a pesetas y viceversa de la cantidad
 * introducida por el usuario y guardar los datos en una Cookie. Se deben mostrar la cantidad,
 * moneda y conversión actual y la cantidad, moneda y conversión anterior (cookie).
 */
if (isset($_POST["enviarEuros"])) {
    $enviarEuros = $_POST["enviarEuros"];
    $euros = $_POST["euros"];
    $pesetas = $_POST["pesetas"];
    $opciones = $_POST["opciones"];

    if ($opciones === "euros") {
        $resultado = $euros * 166.386;
        echo "La cantidad de euros convertida a pesetas es: " . round($resultado, 3) . "\n";
    } else if ($opciones === "pesetas") {
        echo $opciones;
        $resultado = $euros / 166.386;
        echo "La cantidad de pesetas convertida a euros es: " . round($resultado, 3) . "\n";
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
    <form action="ejercicio4.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>CALCULADORA</legend>

            <input type="radio" name="opciones" value="euros">Euros<br><br>
            <input type="radio" name="opciones" value="pesetas">Pesetas<br><br>

            <input type="text" name="euros" placeholder="Indica la cantidad aquí..."><br><br>
            <label for="informacion">1€ equivale a 166.386 pesetas</label><br><br>
            <label for="informacion">1pta equivale a 0,0060 euros</label><br><br>

            <input type="submit" name="enviarEuros" value="Calcular"><br><br>
        </fieldset>
        <?php
        $cookie_name = "ayMiCuki";
        $cookie_value = $euros . "-" . $pesetas . "-" . $resultado;
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