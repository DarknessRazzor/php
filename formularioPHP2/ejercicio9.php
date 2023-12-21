<?php
/**
 * @author Adrián Oriola Martos
 * 9. Ejercicio 8. Crea la tabla de multiplicar de un número indicado por el usuario siendo que el
 * multiplicador se podrá seleccionar entre 1 y 10. Se multiplicará desde 1 al multiplicador
 * seleccionado.
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

    <form method="post" action="ejercicio9.php">
        <label for="numero">Ingrese un número:</label>
        <input type="text" name="numero" id="numero" required>
        <button type="submit">Generar Tabla de Multiplicar</button>
    </form>
</body>

</html>