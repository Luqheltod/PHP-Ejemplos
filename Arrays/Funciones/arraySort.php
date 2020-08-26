<?php
//gsprogramacion.com



$array1 = array( "pequeño" =>"Mercurio" , "grande" =>"Venus" ,"mediano" =>"Tierra" , "equipo1" => "Zaragoza" );

echo $array1["pequeño"];

//usando sort, ordena los valores alfabeticamente ( o numericamente de menor a mayor) y asigna nuevas claves.
sort($array1);

var_dump($array1);


$array2 = array( "pequeño" =>"Mercurio" , "grande" =>"Venus" ,"mediano" =>"Tierra" , "equipo1" => "Zaragoza" );

//aqui vemos que usando ksort, solo presta atencion a las claves, quedando por tanto zaragoza en primera posicion,
//ya que su clave "equipo", es la primera por orden alfabetico
ksort($array2);

var_dump($array2);

?>