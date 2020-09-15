<?php
//gsprogramacion.com

$conexion = new PDO("mysql:host=localhost; dbname=gsprogramacion" , "root","" );

$sql = "SELECT * FROM JUGUETES";

$resultado = $conexion->query($sql);



//la funcion fetch devuelve la siguiente fila, hasta que no haya mas, en cuyo caso devolvera FALSE, por ello podemos usar un while
while( $datos = $resultado->fetch(PDO::FETCH_ASSOC)) {
    
    echo "ID = " . $datos["ID"] . " NOMBRE = " . $datos["NOMBRE"] . " EDAD = " . $datos["EDAD"]
    . " PRECIO = " . $datos["PRECIO"] . " PESO = " . $datos["PESO"];
    echo "<br>";
}



?>