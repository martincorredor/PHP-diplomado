<?php


// CONDICIONALES

$x = 20;
$y = 10;

$operacion = "+";
$resultado = 0;

switch($operacion) {
    case ("+"):
        $resultado = $x + $y;
        break;
    case ("-"):
        $resultado = $x - $y;
        break;
    case ("*"):
        $resultado = $x * $y;
        break;
    case ("/"):
        if ($y != 0) {
            $resultado = $x / $y;
        } else {
            $resultado = "Error: División por cero no permitida.";
        }
        break;
    default:
        $resultado = "Operación no válida.";
        break;
}

echo "El resultado de la operación es: " . $resultado;
echo "<br>";
echo "<br>";



// ------------------------------- CICLOS --------------------------------- 

// Ciclo For
echo "Ciclo For: <br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

for ($i = 20; $i >= 0; $i-= 2) {
    echo $i . " ";
}
echo "<br>";

$multiplosDeSiete = 0;
for ($i = 0; $i <= 1000; $i++) {
    if ($i % 7 == 0) {
        $multiplosDeSiete++;
    }
}
echo "Los múltiplos de 7 entre 0 y 1000 son: " . $multiplosDeSiete . "<br>";
echo "<br>";

// Ciclo while
echo "Ciclo While: <br>";
$palabra = "MARTIN";
$contador = 0;
echo "la palabra " . $palabra . " tiene " . strlen($palabra) . " letras.<br>";
echo "las letras son: <br>";
while ($contador < strlen($palabra)) {
    echo $palabra[$contador] . " en la posición " . $contador . "<br>";
    $contador++;
}
echo "<br>";

// --------------------------------- ARRAYS --------------------------
echo "Arrays: <br>";
// Arrays indexadas
$numeros = array(1, 2, 3, 4, 5);
$numeros[0] = 10;
$numeros[1] = 20;

foreach ($numeros as $numero) {
    echo "Numero: " . $numero . "<br>";
}
echo "<br>";

// Arrays asociativos
$persona = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid");
$persona["nombre"] = "Pedro";
$persona["edad"] = 25;
echo "Nombre: " . $persona["nombre"] . "<br>";
echo "Edad: " . $persona["edad"] . "<br>";
echo "<br>";

// Arrays multidimensionales
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
echo "Matriz: <br>";
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}

?>