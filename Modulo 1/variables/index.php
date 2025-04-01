<?php
$numero = 8;
$nombre = "Juan";
$altura = 1.75;
$isStudent = true;
$segundoNombre = &$nombre;
$segundoNombre = "Pedro"; // Cambiamos el valor de $segundoNombre

echo "Número: $numero<br>";
echo "Nombre: $nombre<br>";
echo "Segundo Nombre: $segundoNombre<br>";
echo "Altura: $altura<br>";
echo "Es estudiante: $isStudent<br>";

function test () {
    global $numero; // Accedemos a la variable global $numero
    echo "<br>Variable global: $numero<br>";
    $GLOBALS['numero'] = 10; // Cambiamos el valor de la variable global $numero
    echo "Variable global modificada: $numero<br>";

    static $x = 0; // Variable estática (guardan los valores previos)
    echo "Variable estática: $x<br>";
    $x++;
}
test();
test();
echo "Numero: $numero<br>";


// Ejemplo de constantes
echo "<br>Ejemplo de constantes<br>";
define("PI", 3.14159); // Definimos una constante
echo "Valor de PI: " . PI . "<br>";
const GRAVITY = 9.81; // Definimos otra constante
echo "Valor de GRAVITY: " . GRAVITY . "<br>";
?>