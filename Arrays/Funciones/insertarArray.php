<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//vamos a insertar un par de elementos al final de nuestro array.

array_push($planetas , "PlanetaInvented" , "PlanetoteInvented");


//aqui se puede observar como se colocan al final con las siguientes claves numericas disponibles.
var_dump($planetas);



//si queremos eliminar el ultimo usamos array_pop

array_pop($planetas);

var_dump($planetas);


// y finalmente si queremos eliminar el primero.

array_shift($planetas);

var_dump($planetas);


//Ahora vamos a añadir un nuevo planeta inventado al principio del todo , podemos añadir mas si asi lo deseamos.
array_unshift($planetas, "PrimerPlanetaNuevo");

var_dump($planetas);

?>