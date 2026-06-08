<?php
/*
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla/terminal.

Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla o imprimeix-la per terminal.
*/

    $varNum = 2;
    $varDouble = 2.3;
    $varString = "hola";
    $varBool = true;

    echo $varNum .PHP_EOL;
    echo $varDouble .PHP_EOL;
    echo $varString .PHP_EOL;
    echo $varBool .PHP_EOL;

    define ('NOMBRE', "Carolina Sainz");
    echo  NOMBRE ;
?>