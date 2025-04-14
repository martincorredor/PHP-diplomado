<?php
require_once 'Figura.php';

class Cuadrado extends Figura {
    private $lado;

    public function __construct($color, $lado) {
        parent::__construct($color);
        $this->lado = $lado;
    }

    public function calcularArea() {
        return $this->lado * $this->lado;
    }

    public function getLado() {
        return $this->lado;
    }
}
?>