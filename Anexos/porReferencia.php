<?php
//gsprogramacion.com

$variable = 12;

//a esta funcion le tenemos que pasar un parametro, simplemente suma 1 y lo muestra
function sumoUno(&$variable){
    
    $variable = $variable +1;
    
    echo $variable;
}


//si llamamos a la funcion, mostrara 13.

sumoUno($variable);

//si hacemos var_dump en la variable de arriba,ahora mostrara 13, puesto que le hemos pasado la variable en si y la funcion la ha modificado gracias al &

var_dump($variable);

?>