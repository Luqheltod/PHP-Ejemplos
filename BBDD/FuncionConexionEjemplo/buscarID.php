<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Busqueda </title>
</head>
<body>


<form action="" method="post" >
Busca una fila por ID : 
<input type="number" name="buscar" > 
<br> 
<input type="submit" name= "Submit" value = "Buscar"> 

</form>
<?php 

if(isset($_POST["Submit"])){
    
    require_once "Conexion.php"; 
    
    $conexion = Conexion::conectar();
    
    $sql = "SELECT * FROM JUGUETES WHERE ID =" . $_POST["buscar"];
    
    $resultado = $conexion->query($sql); 
    
    
    //si hemos obtenido algun resultado, es decir, la consulta no esta vacia por lo tanto hay columnas afectadas 
    if($resultado->rowCount() >0){
        
        while($datos = $resultado->fetch(PDO::FETCH_NUM)){
            
            echo "El producto con este ID es un " .  $datos[1] . " y cuesta " . $datos[3];
        }
    } else{
        
        echo "No se encontró el ID";
    }
}

?>

</body>

</html>