<?php
//gsprogramacion.com


//declaramos e inicializamos el array planetas

$planetas = array("Mercurio" , "Venus", "Tierra" ,"Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

//array_search
//vamos a buscar si esta "Tierra" entre el array planetas[]
//Como devuelve una clave, asignamos a una variable el valor de lo devuelto, en caso de que no exista devolverá FALSE.

$clave = array_search("Tierra", $planetas);

echo $clave; //nos muestra 2, que es la clave que tiene "Tierra" en nuestro array

//si queremos ver el valor bastaria con usar $planetas[$clave]



//in_array
//veamos si existe
$existe = in_array("Mercurio", $planetas);

//nos devolverá 1, ya que si existe.
echo $existe;
?>