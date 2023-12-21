<?php 
/**
 * @author Adrián Oriola Martos
 * 5. Ejercicio 1: Elabora un programa que dado un carácter introducido por el usuario y determine
 * si es:
 * 1. una letra mayúscula 4. un carácter blanco
 * 2. una letra minúscula 5. un carácter de puntuación
 * 3. un carácter numérico 6. un carácter especial
 * Se debe usar funciones para la comprobación de datos
 */
$letras = $_GET["letras"];
if (ctype_upper($letras)){ //para saber si el carácter es mayúscula
    echo "El/La ".$letras." es una mayúscula\n";
}
else if (ctype_lower($letras)){//para saber si es minúscula
    echo "El/La ".$letras." es una minúscula\n";
}
else if (ctype_digit($letras)){//para saber si es numérico
    echo "El ".$letras." es numérico\n";
}
else if (ctype_space($letras)){//para saber si es un espacio en blanco
    echo "El ".$letras." es un espacio en blanco\n";
}
else if (ctype_punct($letras)){//si es un carácter de puntuación
    echo "El ".$letras." es un carácter de puntuación\n";
}
if (ctype_alnum($letras) == false){//si el carácter introducido no es ni número ni letras es un especial
    echo "El ".$letras." es un carácter especial\n";
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
<form action="ejercicio5.php" method="get" enctype="multipart/form-data">
    <label for="letras">Introduce un carácter: </label>
    <input type="text" name="letras"><br><br>
    <input type="submit" name="enviar" value="Enviar carácter"><br><br>
</form>
</body>
</html>