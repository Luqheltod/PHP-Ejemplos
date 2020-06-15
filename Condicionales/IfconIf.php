<?php


//gsprogramacion.com


$variable1 = 12;

$variable2 = 22;


//Se introduce un if dentro de un if, evaluara cada condicion y lo ejecutara si tiene que hacerlo. Las estructuras de control se pueden anidar como se desee.

if($variable1 < 25){
    
    echo "Esta condicion se cumple, el flujo del programa entra aqui.";
    
    if($variable2 !=22){
        
        echo "no es distinto a 22, no entramos.";
    }
    
}




?>