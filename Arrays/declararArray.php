<?php

//declaramos el array planetas


$planetas = array();

//añadimos valores a nuestro array

$planetas[] = "Mercurio";

$planetas[] = "Venus";

$planetas[] = "Tierra";

$planetas[] = "Marte";

$planetas[] = "Jupiter";

//Al no haber introducido ninguna clave , PHP los ordena de forma ascendiente. 

echo $planetas[0] . " es el primero de los planetas del sistema solar , despues viene $planetas[1] y el quinto es $planetas[4]";


?>