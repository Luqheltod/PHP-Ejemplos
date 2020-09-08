<?php
//gsprogramacion.com

//instanciamos el objeto PDO. Lo guardamos en la variable $conexion
//indicamos que el tipo de bbdd es mysql, el dominio es localhost (nuestro equipo)
//y el nombre de la base de datos gsprogramacion. A continuacion, tras la coma, indicamos
//nombre y contraseña, en este caso root y un string en blanco.
$conexion = new PDO("mysql:host=localhost; dbname=gsprogramacion" , "root","" );

var_dump($conexion);
//tendriamos nuestro objeto PDO guardado en conexion. 

?>