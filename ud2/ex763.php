<?php
class Persona {
    private $nombre;    
    function __construct($nombre){
        $this->nombre = $nombre;
    }
    function obtenerNombre(){
        return $this->nombre;
    }
};
$juana = new Persona("Juana");
$juan = new Persona("Juan");
print $juana->obtenerNombre();
print $juan->obtenerNombre();