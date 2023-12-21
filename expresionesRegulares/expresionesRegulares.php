<?php 
/**
 * @author Adrián Oriola Martos
 * 
 * Ejercicios de Expresiones Regulares: debes probar con preg_match el patrón que hayas
 * generado con una cadena válida y una cadena no válida.
 */
/*Creamos una función para validar las expresiones que le pasemos y aceleramos el código*/
function validarExpresiones ($regex, $valor){
    if(preg_match($regex, $valor)){
        echo "Expresión regular correcta\n";
    } else {
        echo "Expresión regular incorrecta\n";
    }
}
/*TELÉFONO FIJO*/
/*Creamos una variable con un valor que acepte nuestra expresión regular y otra con un valor que no lo recoja para comprobar que tenemos bien la expresión regular*/
$valorCorrecto = "+34961471501";
$valorIncorrecto = "+34123451501";
$regex = "/^(\+34|0034|34)?(8|9)([0-9]){8}/";

echo "Validar un número de teléfono fijo\n";
/*A nuestra función le pasamos la expresión regular y el valor que queremos comprobar*/
validarExpresiones($regex, $valorCorrecto);
validarExpresiones($regex, $valorIncorrecto);

echo "-----------------------------------------------------\n";

/*CÓDIGO POSTAL*/
$valorCorrecto2 = "46540";
$valorIncorrecto2 = "25000";
$regex2 = "/^46\d{3}/";

echo "Validar un código postal\n";

validarExpresiones($regex2, $valorCorrecto2);
validarExpresiones($regex2, $valorIncorrecto2);

echo "-----------------------------------------------------\n";

/*TELÉFONO MÓVIL*/
$valorCorrecto3 = "652455031";
$valorIncorrecto3 = "6524550";
$regex3 = "/^[6-9]\d{8}/";

echo "Validar un teléfono móvil\n";

validarExpresiones($regex3, $valorCorrecto3);
validarExpresiones($regex3, $valorIncorrecto3);

echo "-----------------------------------------------------\n";

/*NIF*/
$valorCorrecto4 = "45803394K";
$valorIncorrecto4 = "45803394Ñ";
$regex4 = "/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]/i"; /*acabar en $/i, la i hace que sea indiscriminado si pones la letra en mayúsculas o minúsculas*/

echo "Validar un NIF\n";

validarExpresiones($regex4, $valorCorrecto4);
validarExpresiones($regex4, $valorIncorrecto4);

echo "-----------------------------------------------------\n";

/*FECHA*/
$valorCorrecto5 = "28-02-1996";
$valorIncorrecto5 = "28/02/96";
$regex5 = "/^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/]\d{4}/";

echo "Validar una fecha\n";

validarExpresiones($regex5, $valorCorrecto5);
validarExpresiones($regex5, $valorIncorrecto5);

echo "-----------------------------------------------------\n";

/*APROBADO1*/
$valorCorrecto6 = "aprobado";
$valorIncorrecto6 = "aprovado";
$regex6 = "/^aprobado/";

echo "Validar la cadena 'aprobado' en minúsculas\n";

validarExpresiones($regex6, $valorCorrecto6);
validarExpresiones($regex6, $valorIncorrecto6);

echo "-----------------------------------------------------\n";

/*APROBADO2*/
$valorCorrecto7 = "aprobado";
$valorCorrecto71 = "APROBADO";
$valorIncorrecto7 = "aprovado";
$regex7 = "/^aprobado/i";

echo "Validar la cadena 'aprobado' ya sea mayúsculas o minúsculas\n";

validarExpresiones($regex7, $valorCorrecto7);
validarExpresiones($regex7, $valorCorrecto71);
validarExpresiones($regex7, $valorIncorrecto7);

echo "-----------------------------------------------------\n";

/*MAYÚS/MINUS Y ESPACIOS*/
$valorCorrecto8 = "Hola Panolis";
$valorIncorrecto8 = "$@#%&";
$regex8 = "/^[A-Za-z\s]+/";

echo "Validar mayúsculas, minúsculas y espacios\n";

validarExpresiones($regex8, $valorCorrecto8);
validarExpresiones($regex8, $valorIncorrecto8);

echo "-----------------------------------------------------\n";

/*NÚMERO SIN ESPACIOS*/
$valorCorrecto9 = "123";
$valorIncorrecto9 = "@#€";
$regex9 = "/^\d+/";

echo "Validar números sin espacios\n";

validarExpresiones($regex9, $valorCorrecto9);
validarExpresiones($regex9, $valorIncorrecto9);

echo "-----------------------------------------------------\n";

/*NÚMERO CON ESPACIOS*/
$valorCorrecto10 = "12 3";
$valorIncorrecto10 = "@#€";
$regex10 = "/^[\d\s]+/";

echo "Validar números con espacios\n";

validarExpresiones($regex10, $valorCorrecto10);
validarExpresiones($regex10, $valorIncorrecto10);

echo "-----------------------------------------------------\n";

/*ESPACIOS EN BLANCO, NÚMEROS, MAYUS/MINUS Y ACENTOS*/
$valorCorrecto11 = "Hola 123 adiós";
$valorIncorrecto11 = "|@#@";
$regex11 = "/^[\p{L}\d\s]+/u";

echo "Validar espacios en blanco, números, mayus/minus y acentos\n";

validarExpresiones($regex11, $valorCorrecto11);
validarExpresiones($regex11, $valorIncorrecto11);

echo "-----------------------------------------------------\n";

/*ANTERIOR MÁS ',.;:-*/
$valorCorrecto12 = "Hola-123, adiós:;";
$valorIncorrecto12 = "@";
$regex12 = "/^[\p{L}\d\s'.,;: -]+/u";

echo "Validar todo lo anterior más comas, punto y coma, guiones, dos puntos, punto\n";

validarExpresiones($regex12, $valorCorrecto12);
validarExpresiones($regex12, $valorIncorrecto12);

echo "-----------------------------------------------------\n";

/*EMAIL*/
$valorCorrecto13 = "adrian@gmail.com";
$valorIncorrecto13 = "adriangmail.es";
$regex13 = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";

echo "Validar un email\n";

validarExpresiones($regex13, $valorCorrecto13);
validarExpresiones($regex13, $valorIncorrecto13);

echo "-----------------------------------------------------\n";

/*URL*/
$valorCorrecto14 = "http://www.ieslasenia.org/ejercicio?16";
$valorIncorrecto14 = "www.ieslasenia.org/ejercicio?16";
$regex14 = "/^https?:\/\/www\.[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\/[a-zA-Z0-9\/?-]+/";

echo "Validar URL\n";

validarExpresiones($regex14, $valorCorrecto14);
validarExpresiones($regex14, $valorIncorrecto14);

echo "-----------------------------------------------------\n";

/*CONTRASEÑA CON MINUS/MAYUS Y 6 CARÁCTERES*/
$valorCorrecto15 = "Lucas1";
$valorIncorrecto15 = "lucas";
$regex15 = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}/";

echo "Validar contraseña con minúsculas, mayúsculas y 6 carácteres máximo\n";

validarExpresiones($regex15, $valorCorrecto15);
validarExpresiones($regex15, $valorIncorrecto15);

echo "-----------------------------------------------------\n";

/*IPV4*/
$valorCorrecto16 = "192.168.1.1";
$valorIncorrecto16 = "1.45.32";
$regex16 = "/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){2}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/";

echo "Validar una IPv4\n";

validarExpresiones($regex16, $valorCorrecto16);
validarExpresiones($regex16, $valorIncorrecto16);

echo "-----------------------------------------------------\n";

/*DIRECCIÓN MAC SEPARADA POR : */
$valorCorrecto17 = "01:23:45:67:89:AB";
$valorIncorrecto17 = "043523459E1";
$regex17 = "/^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}/";

echo "Validar una dirección MAC separada por dos puntos :\n";

validarExpresiones($regex17, $valorCorrecto17);
validarExpresiones($regex17, $valorIncorrecto17);

echo "-----------------------------------------------------\n";

/*DIRECCIÓN MAC SEPARADA POR - */
$valorCorrecto18 = "01-23-45-67-89-AB";
$valorIncorrecto18 = "043523459E1";
$regex18 = "/^([0-9A-Fa-f]{2}-){5}[0-9A-Fa-f]{2}/";

echo "Validar una dirección MAC separada por guión -\n";

validarExpresiones($regex18, $valorCorrecto18);
validarExpresiones($regex18, $valorIncorrecto18);

echo "-----------------------------------------------------\n";

/*MATRÍCULA*/
$valorCorrecto19 = "4005 VZX";
$valorIncorrecto19 = "Z4348";
$regex19 = "/^[0-9]{4}\s?[BCDFGHJKLMNPRSTVWXYZ]{3}/i";

echo "Validar matrícula española\n";

validarExpresiones($regex19, $valorCorrecto19);
validarExpresiones($regex19, $valorIncorrecto19);

echo "-----------------------------------------------------\n";
?>