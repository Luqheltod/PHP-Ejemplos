<?php


require_once ("../model/Conexion.php");


$id= $_GET["id"];

$conexion = Conexion::conectar();

$sql = "DELETE FROM ANIMAL WHERE ID = ?" ;

$conexion->prepare($sql) ->execute(array($id));

header("Location:../index.php");

?>