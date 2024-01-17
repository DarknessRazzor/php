<?php

class Incidencia {
public static $codigo = 1;
public static $incidencia = 0;
public $puesto;
public $mensaje;
public $estado = "Pendiente";
public $solucion;
public function setCodigo($codigo) {
    $this->codigo = $codigo;
}
public function getCodigo() {
    return self::$codigo;
}
public function setIncidencia($incidencia) {
    $this->incidencia = $incidencia;
}
public function getIncidencia() {
    return self::$incidencia;
}
public function setPuesto($puesto) {
    $this->puesto = $puesto;
}
public function getPuesto() {
    return $this->puesto;
}
public function setMensaje($mensaje) {
    $this->mensaje = $mensaje;
}
public function getMensaje() {
    return $this->mensaje;
}
public function setEstado($estado){
    $this->estado = $estado;
}
public function getEstado() {
    return $this->estado;
}
public function __construct($puesto, $mensaje) {
    $this->puesto = $puesto;
    $this->mensaje = $mensaje;
    self::$incidencia++;
}   
public function resuelve($solucion){
   $this->solucion = $solucion;
   $this->estado = "Resuelto - ".$solucion;
   self::$incidencia--;
}
public static function getPendientes(){
   return self::$incidencia;
}
public function __toString(){
    return "Incidencia ".self::$codigo++." - Puesto: $this->puesto - $this->mensaje - $this->estado\n";
}
}
?>