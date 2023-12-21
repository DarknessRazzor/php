<?php
/**
 * @author Adrián Oriola Martos
 * 3. Ejercicios 11 y 12 unirlos en una calculadora de euros que convierta de euros a pesetas y de
 * pesetas a euros según lo que elija el usuario (de forma excluyente) y por la cantidad que
 * introduzca. Comprueba que los datos introducidos son los esperados
 */
$enviarEuros = $_GET["enviarEuros"];
$euros = $_GET["euros"];
$pesetas = $_GET["pesetas"];
$opciones = $_GET["opciones"];

if ($opciones === "euros"){
    $resultado = $euros*166.386;
    echo "La cantidad de euros convertida a pesetas es: ".round($resultado,3)."\n";
} else if ($opciones === "pesetas"){
    echo $opciones;
    $resultado = $euros/166.386;
    echo "La cantidad de pesetas convertida a euros es: ".round($resultado,3)."\n";
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
    <form action="ejercicio3.php" method="get" enctype="multipart/form-data">
        <fieldset>
        <legend>CALCULADORA</legend>

        <input type="radio" name="opciones" value="euros">Euros<br><br>
        <input type="radio" name="opciones" value="pesetas">Pesetas<br><br>

        <input type="text" name="euros" placeholder="Indica la cantidad aquí..."><br><br>
        <label for="informacion">1€ equivale a 166.386 pesetas</label><br><br>
        <label for="informacion">1pta equivale a 0,0060 euros</label><br><br>

        <input type="submit" name="enviarEuros" value="Calcular"><br><br>
        </fieldset>
        
    </form> 
</body>
</html>