<?php

class Destruir {
    private $nombreDestruccion;

    public function __construct() {
        echo "Creando... </br>";
    }

    public function asignarNombre($nombre){
        $this->nombreDestruccion = $nombre;
    }

    public function mostrarDestruccion(){
        echo "El nombre de la destrucción es: " . $this->nombreDestruccion . "</br>";
    }

    public function __destruct() {
        echo "Destruyendo... </br>";
    }
}
?>