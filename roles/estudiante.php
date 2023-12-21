<?php 
/**
 * @author Adrián Oriola Martos
 */
session_start();

echo "Bienvenido, <b>estudiante</b>, tu nombre es, ".$_SESSION["nombre"]." ".$_SESSION["apellido"].", tu asignatura es, ".$_SESSION["asignatura"].", y tu grupo es, ".$_SESSION["grupo"];

if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: ejercicio2.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
<br><br>
    <input type="submit" value="Cerrar Sesión" name="cerrar">
</form>
</body>
</html>