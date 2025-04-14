<?php
require_once 'Vehiculo.php';

class Autobus extends Vehiculo {
    private $capacidadPasajeros;
    private $numeroParadas;

    public function __construct($capacidadPasajeros, $numeroParadas) {
        parent::__construct();
        $this->capacidadPasajeros = $capacidadPasajeros;
        $this->numeroParadas = $numeroParadas;
    }

    public function __get($property) {
        return property_exists($this, $property) ? $this->$property : "No existe esta propiedad";
    }

    public function __set($property, $value) {
        return property_exists($this, $property) ? $this->$property = $value : "No existe esta propiedad";
    }

    public function mostrarInfo() {
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Potencia: " . $this->potencia . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Capacidad de Pasajeros: " . $this->capacidadPasajeros . "<br>";
        echo "Número de Paradas: " . $this->numeroParadas . "<br>";
    }
}
?>