<?php 
/**
 * @author Adrián Oriola Martos
 * 2. Formulario 2
* Crea una página web que contenga un formulario con los siguientes campos de información:
* • El nombre, con un control de tipo texto. Tamaño máximo 50 caracteres
* • Los apellidos, con un control de tipo texto. Tamaño máximo 200 caracteres
* • El correo electrónico, con un control de tipo texto. Tamaño máximo 250 caracteres
* • El usuario, con un control de tipo texto. Tamaño máximo 5 caracteres
* • El password, con un control adecuado al contenido. Tamaño máximo 15 caracteres
* • El sexo, con dos opciones excluyentes: hombre o mujer.
* • Provincia: un desplegable con los valores Alicante, Castellón y Valencia y sólo se podrá
* seleccionar uno de ellos
* • Situación: un desplegable con los valores Estudiando, Trabajando y Buscando empleo y Otro de
* modo que se podrá seleccionar uno o varios de ellos. Deberá mostrar 2 elementos cada vez.
* • Comentario: Deberá mostrar un área de texto para que el usuario pueda escribir lo que desee. Su
* tamaño será de 6x60
* • Una casilla de verificación con el texto "Deseo recibir información sobre novedades y ofertas".
* Deberá estar activada por defecto
* • Una casilla de verificación con el texto "Declaro haber leído y aceptar las condiciones generales
* del programa y la normativa sobre protección de datos".
* • Un botón de envío y otro de reset para limpiar el formulario.
* Además, tienes que tener en cuenta los siguientes requisitos:
* • El título de la página debe ser Alumnos - Formulario de registro.
* • Se debe incluir un título que coincidirá con el de la página.
* • El método de envío del formulario debe ser GET.
* • El destino del envío del formulario debe ser el mismo fichero.
* • Cada campo tiene que llevar una etiqueta asociada para la descripción del mismo.
 */

// la función strtoupper pasa cualquier cadena de string que le pasemos a mayúsculas
$nombre = $_GET['nombre'];
echo "<b>Nombre: </b>".strtoupper($nombre)."<br>\n";

$apellido = $_GET['apellido'];
echo "<b>Apellido: </b>".strtoupper($apellido)."<br>\n";

$correo = $_GET['correo'];
echo "<b>Correo: </b>".strtoupper($correo)."<br>\n";

$apodo = $_GET['apodo'];
echo "<b>Nombre de usuario: </b>".strtoupper($apodo)."<br>\n";

$sexo = $_GET['sexo'];
echo "<b>Sexo: </b>".strtoupper($sexo)."<br>\n";

$Provincia = $_GET['Provincia'];
echo "<b>Provincia: </b>".strtoupper($Provincia)."<br>\n";

$Situacion = $_GET['Situacion'];
echo "<b>Situación actual: </b>".strtoupper($Situacion)."<br>\n";

$comentario = $_GET['comentario'];
echo "<b>Comentario: </b>".strtoupper($comentario)."<br>\n";

$notificacion = $_GET['notificacion'];
if(isset($notificacion)){
echo "<b>Información: </b>Has seleccionado la opción recibir información <br>\n";
} else {
    echo "<b>Información: </b>No has seleccionado nada <br>\n";
}

$confirmacion = $_GET['confirmacion'];
if(isset($confirmacion)){
echo "<b>Confirmación: </b>Has confirmado las condiciones generales<br>\n";
} else {
    echo "<b>Confirmación: </b>No ha confirmado las condiciones generales<br>\n";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Oriola - Formulario de registro 2</title>
</head>

<body>
    <h1>Adrián Oriola - Formulario de registro 2</h1>
    <form action="formulario2.php" method="get"><!--creación del formulario-->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" maxlength="50"><br><br><!--creación de input para pasarle el nombre con un máximo de 50 carácteres-->
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" maxlength="200"><br><br><!--creación de input para pasarle el apellido con un máximo de 200 carácteres-->
        <label for="correo">Correo:</label>
        <input type="email" name="correo" maxlength="250"><br><br>
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" id="apodo" name="apodo" maxlength="50"><br><br>
        <label for="nombre">Password:</label>
        <input type="password" name="contra"><br><br>
        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" value="none" checked>ninguno<!--creación de input de formato radio para elegir una de las opciones-->
        <input type="radio" name="sexo" value="M">Mujer
        <input type="radio" name="sexo" value="H">Hombre<br><br>
        <!--creación de input para pasarle el correo con tipo email para confirmar que tiene el formato de correo-->
        <label for="Desplegable">Provincia:</label>
        <select name="Provincia"><!--creación de un menú desplegable de varias opciones con el select-->
            <option value="Valencia" selected>Valencia</option>
            <option value="Castellón">Castellón</option>
            <option value="Alicante">Alicante</option>
        </select><br><br>
        <label for="situacion">Situación actual:</label>
        <select name="Situacion" multiple size="2"><!--creación de un menú desplegable de varias opciones con el select-->
            <option value="Estudiando">Estudiando</option>
            <option value="Trabajando">Trabajando</option>
            <option value="Buscando empleo">Buscando empleo</option>
            <option value="Otro">Otro</option>
        </select><br><br>
        <label for="comentario" name="comentario">Comentario:</label>
        <textarea COLS="60" ROWS="6" NAME="comentario"></textarea><br><br>
        <input type="checkbox" name="notificacion" checked>Deseo recibir información sobre novedades y ofertas<br><br><!--creación de un checkbox con este caso un unico valor, puesto en checkec para que esté por defecto-->
        <input type="checkbox" name="confirmacion">Declaro haber leído y aceptar las condiciones generales
        del programa y la normativa sobre protección de datos<br><br>
        <input type="submit" value="Enviar"><!--creación de un botón para enviar todo el formulario-->
        <input type="reset" value="Limpiar"><!-- creación de botoón para limpiar el formulario-->
    </form>
</body>

</html>