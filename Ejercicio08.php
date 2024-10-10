<?php
// Definir una constante LÍMITE
define('LIMITE', 100000); // Puedes cambiar el límite a cualquier número

// Generar un número aleatorio entre 1 y LÍMITE
$numeroAleatorio = rand(1, LIMITE);

// Usar el operador ternario para determinar si es par o impar
$tipoNumero = ($numeroAleatorio % 2 === 0) ? 'par' : 'impar';

// Mostrar el resultado por pantalla
echo "El número aleatorio generado es: $numeroAleatorio, y es $tipoNumero.";
?>
