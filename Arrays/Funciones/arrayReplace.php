<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//Este sera nuestro array de reemplazo, las claves que coincidiran seran la 0 y la 1. la 10 se añadirá sin mas.
$planetasReemplazo = array ("NuevoMercurio" , "NuevoVenus" , 10=>"PlanetaInvented");

//array_replace devuelve un array, por lo tanto debemos declararlo de nuevo, en este caso usamos la misma variable.
$planetas = array_replace($planetas, $planetasReemplazo);

// vemos que la clave 0 y 1 han sido reemplazados por los valores de $planetasReemplazo, y la clave 10 ha sido añadida .
var_dump($planetas);


?>