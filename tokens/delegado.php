<?php 
/**
 * @author Adrián Oriola Martos
 */
session_start();

echo "Bienvenido, <b>delegado</b>, tu nombre es, ".$_SESSION["nombre"]." ".$_SESSION["apellido"].", tu asignatura es, ".$_SESSION["asignatura"].", y tu grupo es, ".$_SESSION["grupo"]."<br>";

if (isset($_POST["cerrar"])){
    unset($_SESSION);
    header("Location: ejercicio2.php");
}
if (!isset($_SESSION['codigo'])) {
    print('No se ha encontrado token!');
} else {
    //Si existe, debemos comprobar que el token recibido en $_POST es
    //el que hemos almacenado en la variable de la sesión $_SESSION
    if (hash_equals($_SESSION['codigo'], $_SESSION['token']) === false) {
        print('El token no coincide!');
    } else {
        //El token es correcto y continúa el procesamiento con seguridad
        print('El token es correcto y podemos ejecutar acciones');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delegado</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
    <br><br>
    <input type="submit" value="Cerrar Sesión" name="cerrar"><br><br>
    <input type="submit" value="Cambiar SID" name="cambiarSid" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>>
</form>
</body>
</html>