<?php

$X = 5;
$Y = 18;
$M = 8.5;
$N = 3.5;

//Operations X,Y

echo "Operaciones para X e Y \n";
echo "X = $X, Y = $Y \n";
echo "Suma: " . ($X + $Y) . "\n";
echo "Resto: " . ($X - $Y) . "\n";
echo "Producto: " . ($X * $Y) . "\n";
echo "Modulo: " . ($X % $Y) . "\n";

// Operations N,M

echo "Operacones para N y M \n";
echo "M = $M, N = $N \n";
echo "Suma: " . ($M + $N) . "\n";
echo "Resto: " . ($M - $N) . "\n";
echo "Producto: " . ($M * $N) . "\n";
echo "Modulo: " . fmod($M, $N) . "\n";

// Double all variables

echo "El doble de todas variables: \n";

echo "El dobbe de X es: " . ($Y * 2) . "\n";
echo "El dobbe de Y es: " . ($X * 2) . "\n";
echo "El dobbe de M es: " . ($M * 2) . "\n";
echo "El dobbe de N es: " . ($N * 2) . "\n";

// Sum of all variables

echo "La suma de todas las variables es: " . ($Y + $X + $M + $N) . "\n";

// The product of all variables

echo "El producto de todas las variables es: " . ($X * $Y * $M * $N) . "\n";

// Calculator (function)

function calculadora($num1, $num2, $operator)
{

    if ($operator == "+") {
        return $num1 + $num2;
    } elseif ($operator == "-") {
        return $num1 - $num2;
    } elseif ($operator == "*") {
        return $num1 * $num2;
    } elseif ($operator == "/") {
        return ($num1 != 0) ? $num1 / $num2 : "No es posible dividir por 0";
    } else {
        return "Operacion no valida";
    }
}
// Functionality

echo calculadora(10, 20, '+') . "\n";
echo calculadora(10, 20, '*') . "\n";
echo calculadora(10, 20, '-') . "\n";
?>