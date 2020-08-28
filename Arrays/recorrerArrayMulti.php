<?php

//gsprogramacion

//declaramos y damos valores a nuestro array multidimensional discos[][]
$discos = array (  "Rock"=>  array("Cancion A","Cancion B","Cancion C"),
    "Pop"=>  array("Cancion D","Cancion E","Cancion F"),
    "Jazz"=>  array("Cancion G","Cancion H","Cancion I")
    
);

//vamos a recorrerlo con bucles foreach.

var_dump($discos);

//recorremos el array discos[][] de la siguiente manera
foreach ($discos as $generos => $arrayGenero) { //al ser asociativo y querer usar la clave para mostrarla.
    
    echo $generos . "<br>";
    
    foreach ($arrayGenero as $canciones) { //en arrayGenero tenemos cada disco, asi pues lo mostramos.
        
        echo $canciones . " , ";
    }
    
    echo "<br>";
}
?>