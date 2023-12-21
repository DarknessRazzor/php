<?php
/**
 * @author Adrián Oriola Martos
 */
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : null;
$password = isset($_POST["password"]) ? $_POST["password"] : null;
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
$correo = isset($_POST['correo']) ? $_POST['correo'] : null;
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
$direccion = isset($_POST["direccion"]) ? $_POST["direccion"] : null;
$codigoPostal = isset($_POST["codigoPostal"]) ? $_POST["codigoPostal"] : "";
$ley = isset($_POST["ley"]) ? $_POST["ley"] : "";
$contacto = isset($_POST["contacto"]) ? $_POST["contacto"] : [];
$preferenciaContacto = isset($_POST["preferenciaContacto"]) ? $_POST["preferenciaContacto"] : [];
$pago = isset($_POST["pago"]) ? $_POST["pago"] : null;
$errores = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validaRequerido($usuario)) {
        $errores[] = "El campo usuario es obligatorio";
    } else {
        $link = "usuario=" . $usuario . "&";
    }
    if (!validaRequerido($password)) {
        $errores[] = "El campo contraseña es obligatorio";
    } else {
        $link = "password=" . $password . "&";
    }
    if (!validaRequerido($nombre)) {
        $errores[] = "El campo nombre es obligatorio";
    } else {
        $link = "nombre=" . $nombre . "&";
    }
    if (!validaRequerido($correo)) {
        $errores[] = "El campo correo es obligatorio";
    } else {
        $link = "correo=" . $correo . "&";
    }
    if (!validarNumerico($telefono)) {
        $errores[] = "El campo telefono es obligatorio";
    } else {
        $link = "telefono=" . $telefono . "&";
    }
    if (!validaRequerido($direccion)) {
        $errores[] = "El campo direccion es obligatorio";
    } else {
        $link = "direccion=" . $direccion . "&";
    }
    if (!validarNumerico($codigoPostal)) {
        $errores[] = "El campo CP es obligatorio";
    } else {
        $link = "CP=" . $codigoPostal . "&";
    }
    if (validarVariosCasos($ley)){
        $errores[] = "No has aceptado la ley";
    } else {
        $link = "ley=" .$ley . "&";
    }
    if (!validarVariosCasos($contacto)) {
        $errores[] = "El campo Contacto es obligatorio";
    } else {
        $link = "contacto=" . $contacto . "&";
    }
    if (!validarVariosCasos($preferenciaContacto)) {
        $errores[] = "Debes elegir una forma de contacto";
    } else {
        $link = "preferenciaContacto=" . $preferenciaContacto . "&";
    }
    $formasPago = ["efectivo", "tarjeta", "transferencia", "reembolso"];
    if (!in_array($pago, $formasPago)) {
        $errores[] = "Selecciona un método de pago válido";
    } else {
        $link = "pago=" . $pago;
    }
    if (!$errores) {

        // $urlDatos = 'adrian.php?usuario=' . urlencode($usuario) .
        //     '&password=' . urlencode($password) .
        //     '&nombre=' . urlencode($nombre) .
        //     '&correo=' . urlencode($correo) .
        //     '&telefono=' . urlencode($telefono) .
        //     '&direccion=' . urlencode($direccion) .
        //     '&CP=' . urlencode($codigoPostal) .
        //     '&ley=' . urlencode($ley) .
        //     '&contacto=' . urlencode(implode(", ", $contacto)) .
        //     '&preferenciaContacto=' . urlencode(implode(", ", $preferenciaContacto)) .
        //     '&pago=' . urlencode($pago) .
        header('Location: adrian.php?'.$link);
        exit;
    }
}
$usuario = isset($_GET["usuario"]) ? htmlspecialchars($_GET["usuario"]) : "";
$password = isset($_GET["password"]) ? htmlspecialchars($_POST["password"]) : "";
$nombre = isset($_GET["nombre"]) ? htmlspecialchars($_GET["nombre"]) : "";
$correo = isset($_GET['correo']) ? htmlspecialchars($_GET['correo']) : "";
$telefono = isset($_GET_GET['telefono']) ? htmlspecialchars($_GET['telefono']) : "";
$direccion = isset($_GET["direccion"]) ? htmlspecialchars($_POST["direccion"]) : "";
$codigoPostal = isset($_GET["codigoPostal"]) ? htmlspecialchars($_GET["codigoPostal"]) : "";
$ley = isset($_GET["ley"]) ? htmlspecialchars($_GET["ley"]) : "";
$contacto = isset($_GET["contacto"]) ? htmlspecialchars($_GET["contacto"]) : [];
$preferenciaContacto = isset($_GET["preferenciaContacto"]) ? htmlspecialchars($_GET["preferenciaContacto"]) : [];
$pago = isset($_GET["pago"]) ? htmlspecialchars($_GET["pago"]) : null;

    echo '<p><strong>Usuario:</strong> ' . $usuario . '</p>';
    echo '<p><strong>Password:</strong> ' . $password . '</p>';
    echo '<p><strong>Nombre:</strong> ' . $nombre . '</p>';
    echo '<p><strong>Correo:</strong> ' . $correo;
    echo '<p><strong>Telefono:</strong> ' . $telefono . '</p>';
    echo '<p><strong>Direccion:</strong> ' . $direccion . '</p>';
    echo '<p><strong>CP:</strong> ' . $codigoPostal . '</p>';
    echo '<p><strong>Acepta la ley:</strong> ' . $ley;
    echo '<p><strong>Contacto:</strong> ' . $contacto . '</p>';
    echo '<p><strong>Preferencia de contacto:</strong> ' . $preferenciaContacto . '</p>';
    echo '<p><strong>Forma de pago:</strong> ' . $pago . '</p>';
    
function validaRequerido($valor)
{
    return trim($valor) !== "";
}
function validarVariosCasos($valor)
{
    return is_array($valor) && count($valor) > 0;
}
function validarNumerico($valor)
{
    return is_numeric($valor) && $valor > 0 && $valor <= 999999999;
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
    <?php if ($errores): ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error): ?>
                <li>
                    <?php echo $error ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="adrian.php" method="post" enctype="multipart/form-data">

        <label for="usuario">Usuario: </label>
        <input type="text" name="usuario" value="<?php echo $usuario; ?>"></br><br>

        <label for="password">Contraseña: </label>
        <input type="password" name="password" value="<?php echo $password; ?>"></br><br>

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>"></br><br>

        <label for="correo">Correo: </label>
        <input type="email" name="correo" value="<?php echo $correo; ?>"></br><br>

        <label for="telefono">Teléfono: </label>
        <input type="text" name="telefono" value="<?php echo $telefono; ?>"></br><br>

        <label for="direccion">Direccion: </label>
        <input type="text" name="direccion" value="<?php echo $direccion; ?>"></br><br>

        <label for="codigoPostal">CP:</label>
        <input type="text" name="codigoPostal" placeholder="Código postal"
            value="<?php echo $codigoPostal; ?>"></br><br>

        <input type="checkbox" name="ley" value="<?php $ley; ?>">Acepto la LOPDGDD<br><br>

        <label for="contacto">Horario de contacto: </label>
        <select name="contacto[]" multiple size="2">
            <option value="horario1" <?php echo in_array('horario1', $contacto) ? 'selected' : ''; ?>>8-12</option>
            <option value="horario2" <?php echo in_array('horario2', $contacto) ? 'selected' : ''; ?>>10-14</option>
            <option value="horario3" <?php echo in_array('horario3', $contacto) ? 'selected' : ''; ?>>12-16</option>
            <option value="horario4" <?php echo in_array('horario4', $contacto) ? 'selected' : ''; ?>>14-18</option>
            <option value="horario5" <?php echo in_array('horario5', $contacto) ? 'selected' : ''; ?>>16-20</option>
            <option value="horario6" <?php echo in_array('horario6', $contacto) ? 'selected' : ''; ?>>18-22</option>
            <option value="horario7" <?php echo in_array('horario7', $contacto) ? 'selected' : ''; ?>>20-22</option>
        </select></br><br>

        <label>Preferencia de contacto:</label><br>
        <input type="checkbox" name="preferenciaContacto[]" value="telefono" <?php echo in_array('telefono', $preferenciaContacto) ? 'checked' : ''; ?>>Teléfono<br />
        <input type="checkbox" name="preferenciaContacto[]" value="email" <?php echo in_array('email', $preferenciaContacto) ? 'checked' : ''; ?>>Email<br />
        <input type="checkbox" name="preferenciaContacto[]" value="sms" <?php echo in_array('sms', $preferenciaContacto) ? 'checked' : ''; ?>>SMS<br />
        <input type="checkbox" name="preferenciaContacto[]" value="wasTelegram" <?php echo in_array('wasTelegram', $preferenciaContacto) ? 'checked' : ''; ?>>Whatsapp/Telegram<br /><br>

        <label for="pago">Forma de pago (elija una): </label>
        <select name="pago" size="1">
            <option value="efectivo" <?php echo ($pago == "efectivo") ? "selected" : "" ?>>Efectivo</option>
            <option value="tarjeta" <?php echo ($pago == "tarjeta") ? "selected" : "" ?>>Tarjeta</option>
            <option value="transferencia" <?php echo ($pago == "transferencia") ? "selected" : "" ?>>Transferencia</option>
            <option value="reembolso" <?php echo ($pago == "reembolso") ? "selected" : "" ?>>Contra-Reembolso</option>
        </select></br><br>

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>