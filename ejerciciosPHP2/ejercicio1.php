<?php 
/**
 * @author Adrián Oriola Martos
 */
/*1. Elabora un programa que dado un carácter determine si es:
1. una letra mayúscula
2. una letra minúscula
3. un carácter numérico
4. un carácter blanco
5. un carácter de puntuación
6. un carácter especial */
$caracter = readline("Dime un carácter para saber su formato: \n");
// usamos el ctype para saber el tipo y formato del caracter que le vamos a pasar
if (ctype_upper($caracter)){ //para saber si el carácter es mayúscula
    echo "El/La ".$caracter." es una mayúscula\n";
}
else if (ctype_lower($caracter)){//para saber si es minúscula
    echo "El/La ".$caracter." es una minúscula\n";
}
else if (ctype_digit($caracter)){//para saber si es numérico
    echo "El ".$caracter." es numérico\n";
}
else if (ctype_space($caracter)){//para saber si es un espacio en blanco
    echo "El ".$caracter." es un espacio en blanco\n";
}
else if (ctype_punct($caracter)){//si es un carácter de puntuación
    echo "El ".$caracter." es un carácter de puntuación\n";
}
if (ctype_alnum($caracter) == false){//si el carácter introducido no es ni número ni letras es un especial
    echo "El ".$caracter." es un carácter especial\n";
}
?>