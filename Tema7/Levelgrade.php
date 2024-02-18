<?php 

function nivelGrado($notas){
    if ($notas > 100) {
        return "Puntaje inválido"; 
    } elseif ($notas >= 60){
        return "Primera División.";
    } elseif ($notas >= 45 && $notas <=59){
        return "Segunda División.";
    } elseif ($notas >= 33 && $notas <=44){
        return "Tercera División.";
    } else {
        return "Reprobado";
    }
}

/*$notaEstudiante = floatval(readline("Ingrese la nota en porcentaje: "));

if($notaEstudiante >= 0 && $notaEstudiante <=100){
    $nivelEstudiante = nivelGrado($notaEstudiante);
    echo "EL porcentaje de la nota del estudiante es: " . $notaEstudiante . " y su grado es: " . $nivelEstudiante . ".";
}else {
    echo "El valor introducino no es valido. ";
}
?>*/