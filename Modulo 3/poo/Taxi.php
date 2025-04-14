<?php
require_once 'Vehiculo.php';

class Taxi extends Vehiculo {
    private $tarifaBase;

    public function _construct($tarifa) {
        $this->tarifaBase = $tarifa;
        parent::__construct();
    }
    public function __get($property) {
        return property_exists($this, $property) ? $this->$property : "No existe esta propiedad";
    }
    public function __set($property, $value) {
        return property_exists($this, $property) ? $this->$property = $value : "No existe esta propiedad";
    }
}
?>