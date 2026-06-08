<?php
/*
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.
*/

function verifyingGrade (int $note) : string {
    
    if ($note>=60) {
        return "Primera División";
    } else if ($note >= 45){
        return "Segunda División"; 
    } else if ($note >= 33){
        return "Tercera División";
    } else {
        return "No aprobado";
    }

}

$notetoEvaluate = verifyingGrade(65);

echo "El grado del alumno es: ".$notetoEvaluate;

?>