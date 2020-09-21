<?php

$variable = "ola";


function decirOla(){
    
    global $variable;
    echo $variable;
}


//podra mostrar ola, gracias a la palabra reservada global.
decirOla();



?>