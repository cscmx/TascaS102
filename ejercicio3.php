<?php

//EJERCICIO 3 A
$X = 3;
$Y = 5;

$N = 2.5;
$M = 3.6;

echo "valor de X: ".$X ;
echo "valor de Y: ".$Y ;
echo "Suma: ". $X + $Y ;
echo "Resta: ". $X - $Y .'<br>';
echo "Multiplicación: ". $X * $Y .'<br>';
echo "Módulo: ". $X % $Y .'<br>';

echo '<br>';

echo "valor de N: ".$N .'<br>';
echo "valor de M: ".$M .'<br>';
echo "Suma: ". $N + $M .'<br>';
echo "Resta: ". $N - $M .'<br>';
echo "Multiplicación: ". $N * $M .'<br>';
echo "Módulo: ". $N % $M .'<br>';

echo '<br>';

echo "El doble de X: ". $X*2 .'<br>';
echo "El doble de Y: ". $Y*2 .'<br>';
echo "El doble de N: ". $N*2 .'<br>';
echo "El doble de M: ". $M*2 .'<br>';

echo '<br>';

echo "La suma de todas las variables: ".$X + $Y + $N + $M .'<br>';
echo "La multipliación de todas las variables: ".$X * $Y * $N * $M .'<br>';


//EJERCICIO 3 B

function operacionesMatematicas (int $var1, int $var2, string $operacion) {
    $resultado = 0;

    switch ($operacion) {
        case "suma":
            $resultado = $var1 + $var2;
            break;
        case "resta":
            $resultado = $var1 - $var2;
            break;
        case "multi":
            $resultado = $var1 * $var2;
            break;
        case "div":
            $resultado = $var1 / $var2;
            break;
        case "modul":
            $resultado = $var1 % $var2;
            break;
    }

    return $resultado;
    
}
$resultado = operacionesMatematicas(4, 5,"multi");
echo $resultado;

?>