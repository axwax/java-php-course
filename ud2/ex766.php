<?php
class MiBDConexionClase {
    public function conectar(){
        $conn = $this->crearBDConexion();
        $this->setBDConexion($conn);
        return $conn;    
    }
    protected function crearBDConexion(){
        return mysql_connect("localhost");
    }
    private function setBDConexion($conn){
        $this->bdConexion = $conn;
    }
    private $bdConexion;
}
class MiFooPuntoBDConexionClase extends MiBDConexionClase {
    protected function crearBDConexion(){
        return mysql_connect("poo.com");
    }
}