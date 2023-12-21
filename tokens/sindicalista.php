<?php
session_start();
function medio() {
    $medio = array_sum($_SESSION["array"]) / count($_SESSION["array"]);
    echo "<p>Salario medio: $medio</p>";
}
echo "El " .$_SESSION["rol"]." con nombre: ". $_SESSION["nombre"]." tiene acceso a ver el salario medio de los trabajadores:<br>";
echo medio();

if (isset($_POST["cerrar"])) {
    unset($_SESSION);
    header("Location: ejercicio1.php");
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
    <title>Adrián Oriola</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar"><br><br>
        <input type="submit" value="Cambiar SID" name="cambiarSid" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>>
    </form>
</body>
</html>