<?php
//gsprogramacion.com


//lo declaramos y le damos clave->valor en una misma linea

$planetas = array(1=>"Mercurio" , 2=>"Venus", 3=>"Tierra" , 4=>"Marte" , 5=>"Jupiter");

echo "$planetas[1] es el mas cercano al Sol";

echo "<br>";

//Tambien podemos declararlo y posteriormente instanciarlo.

$planetillas = array();

$planetillas[5] = "Jupiter";

echo "$planetillas[5] es el mas grande";

?>