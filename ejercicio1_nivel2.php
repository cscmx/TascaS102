<?php
/* Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.
*/

function calcularTiempoExtra (int $tiempoExtra) {

    return $tiempoExtra * 5;
}

function calculoPrecioLlamada (int $tiempoLlamada)  {
    
    if ($tiempoLlamada < 3) {
        return 10;
    } else {
        $tiempoLlamada = $tiempoLlamada - 3;
        $totalExtra = calcularTiempoExtra($tiempoLlamada);
        return 10 + $totalExtra;
    }

}

echo calculoPrecioLlamada(10);