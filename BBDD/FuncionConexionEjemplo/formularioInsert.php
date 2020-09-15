<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertando una fila </title>
</head>
<body>


<p> Introduce los campos para insertar los datos en la BD <p> 

<!--  En este caso hemos introducido las etiquetas en tablas html -->
 <form action="" method="post">
        <table>
           <tr>
             <td>Nombre</td><td><input type="text" required name="nombre" id="nombre"></td></tr>
           <tr>
             <td>Edad</td>
             <td><input type="number" required name="edad" id="edad"></td>
           </tr>
           <tr>
             <td>Precio</td>
             <td><input type="number" required name="precio" id="precio"></td>
           </tr>
           <tr>
             <td>Peso </td>
             <td><input type="number" required name="peso" id="peso"></td>
           </tr>
           <td colspan="2"> <input type="submit" name="Submit" value="Insertar">
        </td></tr></table>
        </form>
<?php 

//los datos nos van a llegar por POST cuando se pulse el boton. Como siempre
//empezaremos comprobando si se ha pulsado el boton. 

if(isset($_POST["Submit"])){
    
    //recogemos las variables del formulario 
    
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $precio =$_POST["precio"];
    $peso = $_POST["peso"];
    
    //nuestra sentencia SQL por tanto será : 
    
    $sql = "INSERT INTO `juguetes` (`ID`, `NOMBRE`, `EDAD`, `PRECIO`, `PESO`) VALUES (NULL, '$nombre', '$edad', '$precio', '$peso');";
    
    //quedaria conectarnos a la BBDD y ejecutarla , usamos nuestro archivo de conexion. 
    
    require "Conexion.php"; 
    
    $conexion = Conexion::conectar();
    
   $filas = $conexion->exec($sql);
   
   if($filas>0){
       
       echo "Se han introducido los datos";
   }else{
       echo "No se han podido introducir los datos"; 
   }
   
   //Hemos puesto un if else para saber si se han introducido los datos, pero es solo teorico, ya que no tenemos
   //ninguna solucion en este codigo para proseguir su ejecucion si la consulta fallase, es decir,
   //si fallase, el programa terminaria con un error fatal . 
}




?>

</body>

</html>