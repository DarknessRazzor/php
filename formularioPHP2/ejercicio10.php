<?php
/**
 * @author Adrián Oriola Martos
 * 10. Ejercicio 23 Dado un vector asociativo de trabajadores con su salario, crea usando funciones
 * y a criterio del usuario, el salario máximo, el salario mínimo y el salario medio. (puede elegir uno
 * de ellos, varios o todos)
 */


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $salario = $_POST["salario"];
    // $trabajadores[$nombre] = $salario;

    function maximo($valor) {
        $maximo = max($valor);
        echo "<p>Salario máximo: $maximo</p>";
    }
    function minimo($valor) {
        $minimo = min($valor);
        echo "<p>Salario mínimo: $minimo</p>";
    }
    function medio($valor) {
        $medio = array_sum($valor) / count($valor);
        echo "<p>Salario medio: $medio</p>";

    }
    maximo($salario);
    minimo($salario);
    medio($salario);

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
    <h1>Cálculo de Salarios</h1>

    <form action="ejercicio10.php" method="post" >

        <h2>Ingrese los datos de cada trabajador:</h2>

        <label for='nombre'>Nombre del trabajador: </label>
        <input type='text' name='nombre[]' required>
        <label for='salario'>Salario del trabajador:</label>
        <input type='text' name='salario[]' required><br>

        <label for='nombre'>Nombre del trabajador: </label>
        <input type='text' name='nombre[]' required>
        <label for='salario'>Salario del trabajador:</label>
        <input type='text' name='salario[]' required><br>

        <button type="submit">Calcular Salarios</button>
    </form>
</body>

</html>