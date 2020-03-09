<?php
class Persona {
    private $nombre;
    function escogerNombre ($nombre)
    {
    $this-> nombre = $nombre;
    }
    function obtenerNombre()
    {
    return $this->nombre;
    }
    };
    $juana = new Persona();
    $juana->escogerNombre("Juana");
    $juan = new Persona();
    $juan->escogerNombre("Juan");
    print $juana->obtenerNombre() . "\n";
    print $juan->obtenerNombre(). "\n";