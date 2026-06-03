<?php

function isBitten() : string {

    if (rand(1,100) <= 50){
        return "TRUE"; 
    } else {
        return "FALSE";
    }

}
echo isBitten();


/*código para verificar el 50% de posibilidades - porque me entró la duda*/
$contador = 0;
for ($num = 0; $num<100000; $num++){
    if (isBitten()=="TRUE"){
        $contador++;
    }
}
echo "contador = ".$contador;

?>