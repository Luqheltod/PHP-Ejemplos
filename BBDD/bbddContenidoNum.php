<?php
//gsprogramacion.com

$conexion = new PDO("mysql:host=localhost; dbname=gsprogramacion" , "root","" );

$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);



//la funcion fetch devuelve la siguiente fila, hasta que no haya mas, en cuyo caso devolvera FALSE, por ello podemos usar un while
while( $datos = $resultado->fetch(PDO::FETCH_NUM)) {
    
    echo "ID = " . $datos[0] . " NOMBRE = " . $datos[1] . " EDAD = " . $datos[2]
    . " PRECIO = " . $datos[3] . " PESO = " . $datos[4];
    echo "<br>";
}



?>