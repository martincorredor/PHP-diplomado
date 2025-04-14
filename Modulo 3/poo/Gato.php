<?php

class Gato {
    public $nombre;
    public $raza;
    public $edad;
    public $color;
    public $peso;
    public static $especie = "Felino";

    public function __construct($nombre, $raza, $edad, $color, $peso) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->edad = $edad;
        $this->color = $color;
        $this->peso = $peso;
    }

    public function showInfo() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Raza: " . $this->raza . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Peso: " . $this->peso . "<br>";
    }

    public function setName($nombre) {
        $this->nombre = $nombre;
    }
    public function getName() {
        return $this->nombre;
    }

    public function maullar() {
        echo "El gato está maullando.";
    }
    public function dormir() {
        echo "El gato está durmiendo.";
    }
    public function jugar() {
        echo "El gato está jugando.";
    }
}

?>