<?php
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
function validaEmail($valor){ //valida que se haya introducido un email user@ejemplo.com
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
        return false;
    }else{
        return true;
    }
}


?>