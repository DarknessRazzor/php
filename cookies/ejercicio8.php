<?php
/**
 * @author Adrián Oriola Martos
 * 8. Usa el formulario (Ejercicio 18 UD5) de cálculo de media, mediana y moda donde se indiquen
 * varios números y pueda seleccionar una o todas las opciones de cálculo sobre esos números y
 * las muestre guardando estos datos en una Cookie. Se deben mostrar los números con loscálculos 
 * seleccionados en el presente y los números y los cálculos realizados en la ocasión anterior (cookie).
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = $_POST["numeros"];
    $calcularMedia = isset($_POST["calcularMedia"]);
    $calcularModa = isset($_POST["calcularModa"]);
    $calcularMediana = isset($_POST["calcularMediana"]);


    if (empty($numeros)) {
        echo "<p>Por favor, ingresa al menos un número.</p>";
    } else {

        $numerosArray = explode(",", $numeros);
        $numerosArray = array_map('intval', $numerosArray);
        function calcularModa($array)
        {
            $frecuencias = array_count_values($array);
            $moda = array_search(max($frecuencias), $frecuencias);
            return $moda;
        }
        function calcularMediana($array)
        {
            sort($array);
            $count = count($array);
            $middle = floor(($count - 1) / 2);

            if ($count % 2 == 0) {
                $mediana = ($array[$middle] + $array[$middle + 1]) / 2;
            } else {
                $mediana = $array[$middle];
            }

            return $mediana;
        }

        if ($calcularMedia) {
            $media = array_sum($numerosArray) / count($numerosArray);
            echo "<p>La media es: $media</p>";
        }
        if ($calcularModa) {
            $moda = calcularModa($numerosArray);
            echo "<p>La moda es: $moda</p>";
        }
        if ($calcularMediana) {
            $mediana = calcularMediana($numerosArray);
            echo "<p>La mediana es: $mediana</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Adrián Oriola</title>
</head>

<body>
    <h1>Calculadora de estadísticas</h1>
    <form method="post" action="ejercicio8.php" enctype="multipart/form-data">
        <label for="numeros">Ingrese números (separados por comas):</label>
        <input type="text" name="numeros" required><br>

        <label><input type="checkbox" name="calcularMedia"> Calcular Media</label><br>
        <label><input type="checkbox" name="calcularModa"> Calcular Moda</label><br>
        <label><input type="checkbox" name="calcularMediana"> Calcular Mediana</label><br>

        <input type="submit" value="Calcular">
        <input type="reset" name="limpiar" value="Limpiar">
    </form>
    <?php
    $cookie_name = "ayMiCuki";
    $cookie_value = implode(", ", $numerosArray) . "- Media: " . $media . "- Mediana: " . $mediana . "- Moda: " . $moda;
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