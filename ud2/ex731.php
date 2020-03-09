<?php

class archivoarray implements ArrayAccess {
    function offsetExists($offset) {
        return file_exists($offset);
    }
    function offsetGet($offset) {
        return file_get_contents($offset);
    }
    function offsetSet($offset, $value) {
        return file_put_contents($offset, $value);
    }
    function offsetUnset($offset) {
        return unlink($offset);
    }
}

$mi_arreglo = new archivoarray();
$mi_arreglo["algunarchivo.txt"] = "Esto es una prueba.";
echo $mi_arreglo["algunarchivo.txt"];
$mi_arreglo["otroarchivo.txt"] = $mi_arreglo["algunarchivo.txt"];
if (isset($mi_arreglo["algunarchivo.txt"])) {
    unset($mi_arreglo["algunarchivo.txt"]);
}
