<?php 
trait DNI{
    public function generarDNI(){
        $numeroAleatorio = mt_rand(10000000, 99999999);
        $restoNumAle = $numeroAleatorio % 23;
        $idLetra = $this->generarLetraDNI($restoNumAle);
        return $numeroAleatorio . $idLetra;

    }
    public function generarLetraDNI($idLetra){
        $letra = "TRWAGMYFPDXBNJZSQVHLCKE";
        return $letra[$idLetra];
}
}
?>