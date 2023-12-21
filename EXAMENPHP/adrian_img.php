<?php 
/**
 * @author Adrián Oriola Martos
 */



$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;

$imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : null;

$errores = array(); //Este array guardará los errores de validación que surjan.
//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validaRequerido($nombre)) { //Valida que el campo nombre no esté vacío.
        $errores[] = 'El campo nombre es incorrecto.';
    }
    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $nombreDirectorio = "img/";

        $infoArchivo = pathinfo($_FILES['imagen']['name']);

        $extensionesPermitidas = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array(strtolower($infoArchivo['extension']), $extensionesPermitidas)) {
            $errores[] = 'La extensión del archivo no es válida.';
        }

        // Verificar el tamaño del archivo (100 KB)
        define('TAMANO_MAXIMO', 100 * 1024); // 100 KB
        if ($_FILES['imagen']['size'] > TAMANO_MAXIMO) {
            $errores[] = 'El tamaño del archivo excede el límite permitido.';
        }

        // Verificar que el directorio de destino exista y sea escribible
        if (is_dir($nombreDirectorio) && is_writable($nombreDirectorio)) {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $infoArchivo['filename'] . '.' . $infoArchivo['extension'];
            $nombreCompleto = $nombreDirectorio . $nombreFichero;

            move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
            echo "Fichero subido con el nombre: $nombreFichero<br>";
        } else {
            $errores[] = 'El directorio de destino no es válido o no tiene permisos de escritura.';
        }
    } else {
        $errores[] = "No se ha podido subir el fichero.";
    }

    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if (!$errores) {
        $params = http_build_query(array(
            'nombre' => $nombre,
            'imagen' => isset($nombreUnico) ? $nombreUnico : null,
        ));
        header('Location: adrian_img.php?' . $params);
        exit;
    }
}
function validaRequerido($valor){ //Obliga a introducir datos en campos requeridos
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}
function validarEntero($valor, $opciones=null){ //valida que se haya introducido un número entero
    if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
        return false;
    }else{
        return true;
    }
}
// function validaEmail($valor){ //valida que se haya introducido un email user@ejemplo.com
//     if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
//         return false;
//     }else{
//         return true;
//     }
// }

?>

<!DOCTYPE html>
<html>

<head>
    <title> Formulario </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php if ($errores) : ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error) : ?>
                <li> <?php echo $error ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="adrian_img.php" enctype="multipart/form-data">

        <fieldset>
            <legend>Datos personales</legend>

            <label for="nombre"> Nombre: </label>
            <input type="text" id="nombre" name="nombre" maxlength="50" value="<?php echo $nombre ?>">
            <br><br>

            <input type="submit" value="Enviar" />
            <br>
            <label for="imagen">Adjuntar Foto:</label>
            <input type="file" id="imagen" name="imagen" />

        </fieldset>


    </form>
</body>

</html>
