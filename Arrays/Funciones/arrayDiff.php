
<?php
//gsprogramacion.com


//vamos a declarar 3 arrays cada uno con nombres de planetas equipos de futbol y numeros
$array1 = array( "pequeño" =>"Mercurio" , "grande" =>"Venus" ,"mediano" =>"Tierra" , "equipo1" => "Zaragoza" );
$array2 = array( "pequeño" =>"Elche CF" , "gigante" =>"Venus" ,"mediano" =>"Granada CF" , "obliterante"  => "Rayo Vallecano");
$array3 = array( 25,23,66,11, "Mercurio");

//vamos a comparar el array1 con el resto, vemos que solamente hay 2 valores que no estan en los otros 2 arrays. Estos son los que nos muestra el var_dump
$arrayDiferencias = array_diff($array1, $array2,$array3);

var_dump($arrayDiferencias);

//aqui si hacemos lo mismo con las claves vemos que las unicas claves que no existen en los demas son equipo1 y grande.
$claveDiferencias = array_diff_key($array1, $array2, $array3);


var_dump($claveDiferencias);

?>