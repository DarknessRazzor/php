<?php 
class Publicaciones{
public $ISBN;
public $titulo;
public $anyo = 2024;

public function __construct($ISBN, $titulo, $anyo){
    $this->ISBN = $ISBN;
    $this->titulo = $titulo;
    $this->anyo = $anyo;
}
public function __toString(){
    return "ISBN: {$this->ISBN}, título: {$this->titulo}, año de publicación: {$this->anyo}";
}
}
?>