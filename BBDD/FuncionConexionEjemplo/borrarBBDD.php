<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertando una fila </title>
</head>
<body>


<p> Introduce el ID de la fila que deseas eliminar. <p> 

<!--  En este caso hemos introducido las etiquetas en tablas html -->
 <form action="" method="post">
        <table>
           <tr>
             <td>ID</td><td><input type="text" required name="id" id="id"></td></tr>
           
           <td colspan="2"> <input type="submit" name="Submit" value="Eliminar">
        </td></tr></table>
        </form>
<?php 


if(isset($_POST["Submit"])){
    
    //recogemos las variables del formulario 
    
    $id = $_POST["id"];

    
    //nuestra sentencia SQL por tanto será : 
    
    $sql = "DELETE FROM `juguetes` WHERE `ID`=$id;";
    
    //quedaria conectarnos a la BBDD y ejecutarla , usamos nuestro archivo de conexion. 
    
    require "Conexion.php"; 
    
    $conexion = Conexion::conectar();
    
   $filas = $conexion->exec($sql);
   
   if($filas>0){
       
       echo "Se han borrado los datos";
   }else{
       echo "No existe esa ID";
   }
   
}




?>

</body>

</html>