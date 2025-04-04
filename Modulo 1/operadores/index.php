<?php
$numero1 = 10;
$numero2 = 5;

$suma = $numero1 + $numero2; // Suma
$resta = $numero1 - $numero2; // Resta
$multiplicacion = $numero1 * $numero2; // Multiplicación
$division = $numero1 / $numero2; // División
$modulo = $numero1 % $numero2; // Módulo (resto de la división)
$potencia = $numero1 ** $numero2; // Potencia (exponenciación)


// Operadores de comparación
$esIgual = ($numero1 == $numero2); // Igual a
$esDiferente = ($numero1 != $numero2); // Diferente de
$esDiferenteTipo = ($numero1 <> $numero2); // Diferente de (también se puede usar !=)
$esIdentico = ($numero1 === $numero2); // Identico (igual y mismo tipo)
$esNoIdentico = ($numero1 !== $numero2); // No identico (diferente o diferente tipo)

$esMayor = ($numero1 > $numero2); // Mayor que
$esMenor = ($numero1 < $numero2); // Menor que
$esMayorOIgual = ($numero1 >= $numero2); // Mayor o igual que
$esMenorOIgual = ($numero1 <= $numero2); // Menor o igual que



// Operadores lógicos
$y = ($numero1 > 0 && $numero2 > 0); // Y lógico
$o = ($numero1 > 0 || $numero2 > 0); // O lógico
$no = !($numero1 > 0); // NO lógico

// Operadores de asignación
$numero1 += 5; // Asignación con suma
$numero1 -= 5; // Asignación con resta
$numero1 *= 5; // Asignación con multiplicación
$numero1 /= 5; // Asignación con división
$numero1 %= 5; // Asignación con módulo


// Operador de concatenación
$nombre = "Juan";
$apellido = "Pérez";
$nombreCompleto = $nombre . " " . $apellido; // Concatenación de cadenas


// Operador de incremento y decremento
$numero1++; // Incremento (suma 1)
$numero2--; // Decremento (resta 1)

// Operadores de relación
$esIgual = ($numero1 == $numero2); // Igual a
$esDiferente = ($numero1 != $numero2); // Diferente de
?>