<?php

function verifyingGrade (int $note) : string {
    
    if ($note>=60) {
        return "Primera División";
    } else if ($note >= 45 && $note <= 59){
        return "Segunda División"; 
    } else if ($note >= 33 && $note <= 44){
        return "Tercera División";
    } else {
        return "No aprobado";
    }

}

$notetoEvaluate = verifyingGrade(15);

echo "El grado del alumno es: ".$notetoEvaluate;

?>