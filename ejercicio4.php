<?php
/*Fes un programa que implementi una funció on es compti fins a un nombre 
determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir 
un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon 
paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas. */


function sumando (int $num = 10, int $multi) : int {
    $num = $num + $multi;
    return $num;
}

$maximo = 55;
$numero = 3;

do  {
    echo "Número es igual a: ".$numero .'<br>';
    $numero = sumando ($numero, 3);
} while ($numero <= $maximo);


?>