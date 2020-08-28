<?php

//En este caso estamos usando array asociativo para las claves
//A las claves, en vez de corresponderle un unico valor, le corresponde un array
$arrayMulti = array( "Primero" => array (1,2,3) ,
    "Segundo" => array (4,5,6) ,
    "Tercero" => array (7,8,9)
);



//vemos como se muestra en pantalla con un var dump
var_dump($arrayMulti);


//para poder ver su contenido se hace de la siguiente manera:
echo $arrayMulti["Primero"][0]; //el array con clave primero, tiene 3 posiciones, por lo tanto la primera (ya que recordad que empiezan con 0, sera un 1


echo $arrayMulti["Segundo"][2]; // esto nos dara la tercera posicion del array que está en la clave "Segundo". Es decir, un 6
?>