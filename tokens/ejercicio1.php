<?php
/**
 * @author Adrián Oriola Martos
 * 1. Crea un formulario de autenticación para visualizar resultados basándote en el Ejercicio 10 de la
 * UD5 de modo que, según el usuario que acceda (recoge un nombre y perfil (Gerente,
 * Sindicalista y Responsable de Nóminas, todos excluyentes entre sí) y crea el vector de
 * empleados en este formulario), sea redirigido a su página personalizada donde pueda ver los
 * datos a los que tiene permiso. Así pues, el Gerente podrá ver todos los resultados del salario
 * mínimo, máximo y promedio, el sindicalista sólo puede acceder al salario medio y la
 * responsable de Nóminas al salario mínimo y máximo. Añade un título a cada página indicando
 * el rol o si es el formulario de la empresa junto con tu nombre. En cada perfil, añade un botón
 * cerrar sesión que permita liberar la sesión y volver a la página del formulario.
 */
session_start(); //iniciamos la sesión
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['rol'] = $_POST['rol'];
    $_SESSION["codigo"] = $_POST["codigo"];
    $array = array("Adrián" => 1500, "Samuel" => 2000, "Alejandro" => 2500, "Lucas" => 3000);
    $rol = $_POST["rol"];
    $nombre = $_POST["nombre"];
    $_SESSION["array"] = $array;

    switch ($rol) {
        case 'Gerente':
            header("Location: gerente.php");
            break;
        case 'Sindicalista':
            header("Location: sindicalista.php");
            break;
        case 'Responsable de Nominas':
            header("Location: nominas.php");
            break;
    }

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

    <form action="ejercicio1.php" method="post">

        <input type="hidden" name="codigo" value="<?php echo $_SESSION["token"]; ?>">

        <h2>Ingrese los datos de cada trabajador:</h2>

        <label for="roles">Elige tu rol de trabajador</label>
        <input type="radio" name="rol" value="Gerente" />Gerente
        <input type="radio" name="rol" value="Sindicalista" />Sindicalista
        <input type="radio" name="rol" value="Responsable de Nominas" />Responsable de nóminas<br><br>

        <label for='nombre'>Nombre del usuario: </label>
        <input type='text' name='nombre'><br><br>

        <button type="submit">Calcular Salarios</button>
    </form>
</body>

</html>