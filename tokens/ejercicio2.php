<?php
/**
 * @author Adrián Oriola Martos
 * 2. Crea un formulario de identificación de usuario de modo que el usuario introduzca su nombre,
 * apellido, asignatura y grupo. Además debe seleccionar si es menor o mayor de edad y si tiene
 * un cargo o no. Según los datos introducidos, se clasificará en un perfil según la siguiente tabla:
 * 
 * Genera una página para cada perfil de la tabla en la que se muestre un saludo de bienvenida
 * indicando los datos del usuario (nombre y apellidos) y mostrando la asignatura y grupo elegidos.
 * Además deberá poder cerrar la sesión y volver a la página del formulario. Utiliza las sesiones
 * para poder realizar este ejercicio.
 */
session_start();
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}

$_SESSION['nombre'] = $_POST['nombre'];
$_SESSION['apellido'] = $_POST['apellido'];
$_SESSION['asignatura'] = $_POST['asignatura'];
$_SESSION['grupo'] = $_POST['grupo'];
$_SESSION['edad'] = $_POST['edad'];
$_SESSION['cargo'] = $_POST['cargo'];
$_SESSION["codigo"] = $_POST["codigo"];

if (isset($_POST["enviar"])){

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$asignatura = $_POST["asignatura"];
$grupo = $_POST["grupo"];
$edad = $_POST["edad"];
$cargo = $_POST["cargo"];

if($edad === "menor" && $cargo === "si"){

    header("Location: delegado.php");

} else if ($edad === "menor" && $cargo === "no"){

    header("Location: estudiante.php");

} else if ($edad === "mayor" && $cargo === "no"){

    header("Location: profesor.php");

} else if($edad === "mayor" && $cargo === "si"){
    
    header("Location: director.php");
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
    <form action="ejercicio2.php" method="post">

    <input type="hidden" name="codigo" value="<?php echo $_SESSION["token"]; ?>">

    <label for="nombre">Nombre: </label><br>
    <input type="text" name="nombre" id="nombre"><br><br>

    <label for="apellido">Apellido: </label><br>
    <input type="text" name="apellido" id="apellido"><br><br>

    <label for="asignatura">Asignatura: </label><br>
    <input type="text" name="asignatura" id="asignatura"><br><br>

    <label for="grupo">Grupo: </label><br>
    <input type="text" name="grupo" id="grupo"><br><br>

    <label for="edad">Eres mayor o menor de edad?</label><br><br>
    <input type="radio" name="edad" value="mayor"/>Mayor
    <input type="radio" name="edad" value="menor"/>Menor<br><br>

    <label for="cargo">Tienes cargo?</label><br><br>
    <input type="radio" name="cargo" value="si"/>SI
    <input type="radio" name="cargo" value="no"/>NO<br><br>

    <button type="submit" name="enviar" value="enviar">Enviar datos</button>

    </form>
</body>

</html>