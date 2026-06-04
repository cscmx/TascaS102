<?php

function isBitten() : bool {

    if (rand(1,100) <= 50){
        return true; 
    } else {
        return false;
    }

}

echo isBitten() ? "Te ha mordido Charlie" : "Te salvaste esta vez";



/*código para verificar el 50% de posibilidades - porque me entró la duda
$contador = 0;
for ($num = 0; $num<100000; $num++){
    if (isBitten() == true){
        $contador++;
    }
}
echo "contador = ".$contador;
*/

?>