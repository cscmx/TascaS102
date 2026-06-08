<?php
/* Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

define ('EXTRAMINUTE', 5);
define ('FIRST3MINUTES', 10);


function calculateCallPrice (int $tiempoLlamada)  {
    
    if ($tiempoLlamada < 3) {
        return FIRST3MINUTES;
    } else {
        $tiempoLlamada = $tiempoLlamada - 3;
        $totalExtra = $tiempoLlamada * EXTRAMINUTE;
        return FIRST3MINUTES + $totalExtra;
    }
}

echo "The total price of the call is: ".calculateCallPrice(10);