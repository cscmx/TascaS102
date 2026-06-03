<?php

function isBitten() : string {

    if (rand(0,100) <= 50){
        return "TRUE"; 
    } else {
        return "FALSE";
    }

}

echo isBitten();

?>