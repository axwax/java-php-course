<?php 
class objetoarray implements ArrayAccess {
    function offsetExists($offset) {
        echo "Llamada a offsetExists!\n";
        return true;
    }
    function offsetGet($offset) {
        echo "Llamada a offsetGet!\n";
    }
    function offsetSet($offset, $value) {
        echo "Llamada a offsetSet!\n";
    }
    function offsetUnset($offset) {
        echo "Llamada a offsetUnset!\n";
    }
}
$mi_arreglo = new objetoarray();
$mi_arreglo[5] = "algun";
echo $mi_arreglo[5];
if (isset($mi_arreglo[5])) {
unset($mi_arreglo[5]);
}