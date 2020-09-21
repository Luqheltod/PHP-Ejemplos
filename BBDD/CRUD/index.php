<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>


<?php   
//gsprogramacion.com
require "Conexion.php";
$conexion = Conexion::conectar();
//Codigo para insertar al pulsar el boton de insertar 

//si hemos pulsado el boton de insertar se ejecutara este codigo 
if(isset($_POST["Submit"])){
   
    
    //definimos los inputs que meteremos en la bbdd , que vienen del formulario.
    
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $peso = $_POST["peso"];
    $precio = $_POST["precio"];
    
    
  
//introducimos en la bbdd , con una consulta preparada

$sql = "INSERT INTO juguetes (nombre, edad, peso, precio) VALUES (:nombre, :edad, :peso, :precio)";

//preparamos la consulta
 $resultado = $conexion->prepare($sql);
//asignamos los valores 
 $resultado->bindValue(":nombre", $nombre);
 $resultado->bindValue(":edad", $edad);
 $resultado->bindValue(":peso", $peso);
 $resultado->bindValue(":precio", $precio);
//y por ultimo ejecutamos, nuestro registro ya ha sido introducido.
 $resultado ->execute();
}
?>


<?php
//codigo que nos facilita la lectura de todos los campos de nuestra BBDD, para mostrarlos en la tabla de abajo 

$sql = "SELECT * FROM JUGUETES";

//en esta ocasion vamos a usar los campos como si fuesen objetos, con PDO::FETCH_OBJ
$registros = $conexion->query($sql) ->fetchAll(PDO::FETCH_OBJ);

?>

<h1>Jugueteria GsProgramacion<span class="subtitulo">Juguetes Disponibles</span></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"> 
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Edad</td>
      <td class="primera_fila">Peso</td>
      <td class="primera_fila">Precio</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>

    <?php   
		
	//con este foreach , vamos a repertir codigo en funcion de los campos que tengamos en nuestra base de datos. 	
	//en los dos ultimos botones, vamos a pasar la referencia a nuestras paginas borrar y editar a traves de GET.
    
		foreach ($registros as $juguetes):		?>
		
   	  <tr>
      <td><?php echo $juguetes->ID  ?></td>
      <td><?php echo $juguetes->NOMBRE  ?></td>
      <td><?php echo $juguetes->EDAD  ?></td>
      <td><?php echo $juguetes->PESO ?></td>
      <td><?php echo $juguetes->PRECIO  ?></td>
      
      <td class="bot"><a href="borrar.php?id=<?php echo $juguetes->ID?>"> <input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="editar.php?id=<?php echo $juguetes->ID?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>     
    
    
    <?php  endforeach;?>
     <!--  ESTOS SON LOS INPUT PARA INSERTAR,  -->
	<tr>
	<td></td>
      
      <td><input type="text" name='nombre' required class='centrado'> 
      </td>
     
      <td><input type="number" name='edad' required class='centrado'> 
      </td>
      
     <td><input type="number" name='peso' required class='centrado'> 
      </td>
     <td><input type="number" name='precio' required class='centrado'> 
      </td>
     
      <td class='bot'><input type='submit' name='Submit' id='cr' value='Insertar'></td></tr>    
  </table>
 </form>

<p>&nbsp;</p>
    