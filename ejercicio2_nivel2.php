<?php 
/*
Imagina que estàs programant part de la lògica de la classificació de punts d'un joc. En aquest programa necessitem entrar 3 puntuacions diferents(les puntuacions són entre 0 i 9999). D'aquestes puntuacions necessitarem:
La seva suma
La seva mitjana
La classificació. Sent "Principiant" menor de 4000. "Intermedi" menor de 8000 i "Professional" la resta.
Pensa a fer més d'una funció per resoldre aquest problema.
*/

$points1 = rand(0,9999);
$points2 = rand(0,9999);
$points3 = rand(0,9999);

function totalPoints (int $n1,int $n2,int $n3) {
    return $n1 + $n2 + $n3;
}

function averagePoints (int $n1,int $n2,int $n3) {
    return totalPoints($n1, $n2, $n3)/3;
}

function pointsClassification (int $nX) {
    if ($nX < 4000) {
        return "Beginner";
    } elseif ($nX < 8000) {
        return "Middle Level";
    } else {
        return "Professional";
    }
}

$averageGamerPoints = (int)averagePoints($points1,$points2,$points3);

echo "The total Points are: ". totalPoints($points1,$points2,$points3).PHP_EOL;
echo "The average points is: ". averagePoints($points1,$points2,$points3).PHP_EOL;
echo "The level of the gamer is:  ". pointsClassification($averageGamerPoints).PHP_EOL;

?>