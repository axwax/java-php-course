<?php
class Animal {
    function hacerSonido(){
        print "Error: Este método debe implementarse nuevamente en los hijos";
    }
}
class Gato extends Animal {
    function hacerSonido(){
        print "miau";
    }
}
class Perro extends Animal{
    function hacerSonido(){
        print "guau";
    }
}
function imprimirElSonido($obj){
    if ($obj instanceof Animal) {
        $obj->hacerSonido();
    } else {
        print "Error: Pasó un tipo de objeto incorrecto";
    }
    print "\n";
}
imprimirElSonido(new Gato());
imprimirElSonido(new Perro());   