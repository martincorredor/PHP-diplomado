<?php
require_once 'Figura.php';

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($color, $base, $altura) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }

    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }
}
?>