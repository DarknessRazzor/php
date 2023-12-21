<?php
/**
 * @author Adrián Oriola Martos
 * 6. Usa el formulario (Ejercicio 9 UD5) de la tabla de multiplicar donde se indique multiplicando y
 * multiplicador guardando estos datos en una Cookie. Se deben mostrar la tabla, el multiplicando
 * y multiplicador actual y el multiplicando y multiplicador anterior (cookie).
 */
// Obtener el número ingresado por el usuario
$numero = $_POST["numero"];

// Validar que el número sea un entero positivo
if (is_numeric($numero) && $numero > 0) {
    echo "<h2>Tabla de multiplicar del número $numero</h2>";
    echo "<ul>";

    // Generar la tabla de multiplicar
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }

    echo "</ul>";
} else {
    echo "<p>Por favor, ingrese un número entero positivo.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>Generador de Tabla de Multiplicar</h1>

    <form method="post" action="ejercicio6.php" enctype="multipart/form-data">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Generar Tabla de Multiplicar</button>
    </form>
    <?php
    $cookie_name = "ayMiCuki";
    $cookie_value = $numero;
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