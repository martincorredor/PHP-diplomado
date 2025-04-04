<?php
declare(strict_types=1);

// ------------------------------- FUNCIONES ---------------------------------
function saludo($nombre) {
    echo "Hola, " . $nombre . "! Bienvenido a la función de saludo.";
}
function suma(int $a, int $b) {
    echo $a + $b;
}

saludo("Juan");
echo "<br>";
suma(5, 10);
echo "<br>";


function calcularIMC(float $altura, float $peso): float {
    return $peso / ($altura * $altura);
}

echo calcularIMC(1.75, 73) . "<br>";    

?>