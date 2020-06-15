<?php

//gsprogramacion.com


$variableCondicion1 = 12;

$variableCondicion2 = 17;

$variableCondicion3 = 19;

$variableCondicion4 = 33;

if ($variableCondicion1 > 20) {
    
    // no se cumple la condicion, no entra
    echo "no entra";
} elseif ($variableCondicion2 > 20) {
    
    // no se cumple la condicion, no entra
    echo "no entra";
} elseif ($variableCondicion3 > 20) {
    // no se cumple la condicion, no entra
    echo "no entra";
} elseif ($variableCondicion4 > 20) {
    
    echo "Vamos a ejecutar solamente esto, el ultimo elseif.";
} else {
    
    // este seria el codigo que se ejecutaria si todos los demas if o elseif no hubiesen sido ciertos.
}


echo "<br>" ;

/*
 * Ahora tenemos el mismo codigo, pero he cambiado una variable,
 *
 * cuando entre en ese elseif, parara y no comprobara los demas elseif. Ya ha encontrado un codigo que ejecutar
 */

$variableCondicion2 = 25;

if ($variableCondicion1 > 20) {
    
    // no se cumple la condicion, no entra
    echo "no entra";
    
    
} elseif ($variableCondicion2 > 20) {
    
    echo "Ejecutamos esto, el segundo elseif"; //Ejecuta esto y para, no evalua mas.
    
    
} elseif ($variableCondicion3 > 20) {
    
    // no se cumple la condicion, no entra
    echo "no entra";
    
} elseif ($variableCondicion4 > 20) {
    
    echo "Vamos a ejecutar solamente esto"; // Vemos que aqui ya no entra, no se imprime nada .
}

?>