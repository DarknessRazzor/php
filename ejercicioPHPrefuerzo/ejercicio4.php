<?php 
/**
 * @author Adrián Oriola Martos
 */
/**
 * 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas ordinarias (40 primeras horas de trabajo)
 *  se pagan a 12 euros la hora. A partir de la hora 41, se pagan a 16 euros la hora.
 */
$horas = readline("Dime cuantas horas semanales has hecho: ");
$horasExtra = 0;
$horasNormales = 0;
$sueldo = 0;

if ($horas <= 40){ //condicional para hacer una operación, en este caso si las horas pasadas son menor a 40 horas

    $horasNormales = ($horas * 12);
        echo "El salario a percibir es: ".$horasNormales."€\n";
    
} if($horas > 40) {//condicional para hacer una operación, en este caso averiguar cuantas horas extras ha hecho, calcular el precio de la hora extra y sumarselo
    //a las horas normales

    $horasExtra = ($horas - 40);
    $horasExtra *= 16;
    $horasNormales = (40 * 12);
    $sueldo = $horasNormales + $horasExtra;
    
    echo "El salario a percibir es: ".$sueldo."€\n";
    
}



?>