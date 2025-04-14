<?php
class Vehiculo {
    private $matricula;
    private $modelo;
    private $potencia;
    private $color;

    public function __construct($matricula, $modelo, $potencia, $color) {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
        $this->color = $color;
    }

    public function __get($property) {
        return property_exists($this, $property) ? $this->$property : "No existe esta propiedad";
    }

    public function __set($property, $value) {
        return property_exists($this, $property) ? $this->$property = $value : "No existe esta propiedad";
    }

    public function encenderVehiculo() {
        echo "El vehículo está encendido.<br>";
    }
    public function apagarVehiculo() {
        echo "El vehículo está apagado.<br>";
    }
}
?>