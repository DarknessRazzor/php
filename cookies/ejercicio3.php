<?php
/**
 * @author Adrián Oriola Martos
 * 3. Usa el formulario (Ejercicio 1 UD5) del selector de operación y las operaciones de suma, resta,
 * división y multiplicación de modo que se guarde en la Cookie las operaciones elegidas y
 * muestre el resultado de la operación indicando cuáles han sido las operaciones elegidas en la
 * ejecución actual (formulario) y las elegidas en la operación anterior a la actual (cookie).
 */
if (isset($_POST["calcular"])) {
    $numero1 = $_POST['numero1'];
    echo "El primer número introducido es: $numero1<br>";

    $numero2 = $_POST['numero2'];
    echo "El segundo número introducido es: $numero2<br>";

    $operario = $_POST['operadores'];
    foreach ($operario as $operadores => $valor) {

        if ($valor == "suma") {
            echo "El resultado es: " . $numero1 + $numero2;

        } else if ($valor == "resta") {
            echo "El resultado es: " . $numero1 - $numero2;

        } else if ($valor == "multiplicación") {
            echo "El resultado es: " . $numero1 * $numero2;

        } else if ($valor == "división") {
            echo "El resultado es: " . $numero1 / $numero2;

        }
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
    <form action="ejercicio3.php" method="post" enctype="multipart/form-data">

        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1"><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2"><br><br>

        <label for="selector">Selector de operaciones:</label>
        <select multiple name="operadores[]">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option> 
            <option value="multiplicación">Multiplicar</option>
            <option value="división">Dividir</option>
            <select><br><br>

                <input type="submit" name="calcular" value="Calcular"><br><br>
                <?php

                $cookie_name = "ayMiCuki";
                $cookie_value = $numero1 . "-" . $numero2 . "-" . implode(", ", $operario);
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