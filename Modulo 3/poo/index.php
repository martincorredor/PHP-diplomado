<?php
require_once 'Gato.php';
require_once 'Calculadora.php';
require_once 'Destruir.php';
require_once 'Figura.php';
require_once 'Triangulo.php';
require_once 'Cuadrado.php';

echo "<h1>Ejemplo de POO en PHP</h1>";
echo "<h2>Clase Gato</h2>";
$GatoBlanco = new Gato( "Blanco", "Persa", 2, "Blanco", 4.5);
$GatoBlanco->maullar();
echo "<br>";
$GatoBlanco->showInfo();

echo "<br>";
echo "--------------------------------";
echo "<br>";
echo "<h2>Clase Calculadora</h2>";

$Casio = new Calculadora(10, 5, '+');
$Casio->operacion();

echo "<br>";
echo "--------------------------------";
echo "<br>";
echo "<h2>Clase Destruir</h2>";
$Destruir = new Destruir();
$Destruir->asignarNombre("Destrucción de objetos");
$Destruir->mostrarDestruccion();


echo "<br>";
echo "--------------------------------";
echo "<br>";
$Cuadradito = new Cuadrado("Rojo", 4);
$Triangulito = new Triangulo("Azul", 3, 5);
echo "<h2>Clase Figura</h2>";
echo "<h3>Cuadrado</h3>";
echo "Cuadrado de color: " . $Cuadradito->getColor() . "<br>";
echo "Area del cuadradito: " . $Cuadradito->calcularArea() . "<br>";
?>