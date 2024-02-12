<?php
function palabra_Caracter($array_Palabra, $caracter)
{
    $caracter = strtolower($caracter);

    foreach ($array_Palabra as $palabra) {
        $palabra = strtolower($palabra);
        if (strpos($palabra, $caracter) === false) {
            return false;
        }
    }
    return true;
}

$array_palabra0 = ["hola", "Html", "h"];
$caracter0 = "H";
$resultado0 = palabra_Caracter($array_palabra0, $caracter0);
echo "Las palabras contienen: " . $caracter0 . " " . ($resultado0 ? 'true' : 'false') . "\n";
?>