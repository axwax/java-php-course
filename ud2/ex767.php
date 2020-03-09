<?php
class Gato {
    function miau(){
        print "miau";
    }
}
class Perro {
    function guau(){
        print "guau";
    }
}
function imprimirElSonido($obj){
    if ($obj instanceof Gato) {
        $obj->miau();
    }
    else if ($obj instanceof Perro) {
        $obj->guau();
    }
    else {
        print "Error: Pasó el tipo de dato incorrecto";
    }
    print "\n";
}
imprimirElSonido(new Gato());
imprimirElSonido(new Perro());  