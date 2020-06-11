<?php

//gsprogramacion.com

$variable_string = "Hoy he ido a programar al infierno con Satanas, me enseñó trucos de Kotlin";

echo  $variable_string . " " . gettype($variable_string) ;  // Las cadenas en PHP se concatenan con un .    Aqui estamos concatentando la variable
//que hemos delarado, un espacio en blanco, y lo que nos devuelve la funcion gettype.

echo "<br>"; //etiqueta de HTML que imprimimimos en el documento, por lo tanto hace lo que hace <br>, que es saltar una linea.


$variable_integer = - 27;
echo $variable_integer . " " . gettype($variable_integer);
echo "<br>";


$variable_double = 12.12;
echo $variable_double . " " . gettype($variable_double);
echo "<br>";


$variable_boolean = true;
echo $variable_boolean . " " . gettype($variable_boolean);
echo "<br>";


$variable_nula = NULL;
echo $variable_nula . " " . gettype($variable_nula);
echo "<br>";





//ahora vamos a asignale a la variable nula , el numero 33. Veremos como de forma automatica lo cambia, lo cual no es posible en otros lenguajes


$variable_nula = 33;
echo $variable_nula . " Ahora resulta que la variable nula vale 33 (><)"
    
?>