<?php

$variable = "ola";


function decirOla(){
    
    global $variable;
    echo $variable;
}


decirOla();



?>