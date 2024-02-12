<?php 

$saludo = "Hello, World!";

//Transformar a mayus
$saludo_mayus = strtoupper($saludo);
echo $saludo_mayus . "\n";

//Imprimir longitud de saludo
$saludo_long = strlen($saludo);
echo $saludo_long . "\n";

//Imprimir inverso
$saludo_inverso = strrev($saludo);
echo $saludo_inverso . "\n";

//Crear variable y concatenar
$saludo2 = "Este es el curso de PHP.";
$concatenacion = $saludo . " " . $saludo2;
echo $saludo . ", " . $saludo2;
echo $concatenacion;
?>