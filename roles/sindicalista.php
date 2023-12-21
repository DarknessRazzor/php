<?php
session_start();
function medio() {
    $medio = array_sum($_SESSION["array"]) / count($_SESSION["array"]);
    echo "<p>Salario medio: $medio</p>";
}
echo "El " .$_SESSION["rol"]." con nombre: ". $_SESSION["nombre"]." tiene acceso a ver el salario medio de los trabajadores:<br>";
echo medio();

if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: ejercicio1.php");
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
    <form action="ejercicio1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
    </form>
</body>
</html>