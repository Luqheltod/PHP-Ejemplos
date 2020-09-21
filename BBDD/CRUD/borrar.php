<?php
//gsprogramacion.com

require("Conexion.php");
$conexion = Conexion::conectar();

//aqui cogemos via GET lo que nos han mandado a traves del boton
$id= $_GET["id"];


$sql = "DELETE FROM JUGUETES WHERE ID = ?" ;

$conexion->prepare($sql) ->execute(array($id));

//una vez ejecutada nuestra query para borrar, regresamos al index
header("Location:index.php");

?>