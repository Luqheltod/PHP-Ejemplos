<?php
//gsprogramacion.com

//instanciamos el objeto PDO. Lo guardamos en la variable $conexion
//indicamos que el tipo de bbdd es mysql, el dominio es localhost (nuestro equipo)
//y el nombre de la base de datos gsprogramacion. A continuacion, tras la coma, indicamos
//nombre y contraseña, en este caso root y un string en blanco.
$conexion = new PDO("mysql:host=localhost; dbname=gsprogramacion" , "root","" );


//Esta es la sentencia SQL que vamos a usar.
$sql = "SELECT * FROM JUGUETES";

//llamamos a un metodo de la clase PDO, recordad que instanciamos un objeto anteriormente en conexion de dicha clase
$resultado = $conexion->query($sql);
//este metodo devuelve un objeto PDOstatement, lo tenemos almacenado actualmente en la variable resultado .

//si por ejemplo hiciesemos vardump a resultado, vemos que nos muestra objeto PDOSTATEMENT
var_dump($resultado);

//una vez que tenemos nuestro PDOstatement, vamos a sacar los datos de el.
//por ejemplo podemos usar la funcion fetchAll(). ¿Que nos devuelve? Lo podemos ver con un var_dump
$datos = $resultado->fetchAll();
var_dump($datos);
//Podemos ver que nos devuelve un array tanto asociativo como numerico.

?>