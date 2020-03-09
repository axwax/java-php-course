<?php
class factor1 implements Iterator {
    private $cuerpos = 0;
    private $max;
    private function hacerfactor($valor) {
    if ($valor <= 1) return 1;
        return $valor * $this->hacerfactor($valor - 1);
    }
    public function key() {
        return $this->cuerpos;
    }
    public function current() {
        if ($this->cuerpos == 0) return 0;
        return $this->hacerfactor($this->cuerpos);
    }
    public function next() {
        ++$this->cuerpos;
    }
    public function rewind() {
        $this->cuerpos = 0;
    }
    public function valid() {
        if ($this->cuerpos <= $this->max) {
            return true;
        } else {
            return false;
        }
    }
    public function __construct($maxval) {
        $this->max = $maxval;
    }
}

$factorial = new factor1(6);
foreach($factorial as $clave => $val) {
echo "$clave = $val\n";
}