<?php

abstract class Figura {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function calcularArea();

    public function getColor() {
        return $this->color;
    }
    
}
?>