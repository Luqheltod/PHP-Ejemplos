<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<?php  
//gsprogramacion.com
require("Conexion.php");
$conexion = Conexion::conectar();
if(isset($_POST["Submit"])){   //si han pulsado el boton, hacemos el update con lo que haya dicho y redirigimos a index
    
    $id = $_POST["id"];
    
    $sql = "UPDATE juguetes SET nombre = :nombre, edad = :edad, peso = :peso, precio = :precio WHERE id = $id";

    
    $resultado = $conexion->prepare($sql);
    $resultado->bindValue(":nombre",$_POST["nombre"]);
    $resultado->bindValue(":edad", $_POST["edad"]);
    $resultado->bindValue(":peso", $_POST["peso"]);
    $resultado->bindValue(":precio",$_POST["precio"]);
   
    $resultado -> execute();
    header("Location:index.php");
}

?>

<body>

<h1>ACTUALIZAR</h1>

<p>
 <?php 
 

 //recogemos la ID por get del articulo que vamos a modificar. 
$id = $_GET["id"];
 
//recogemos los campos de dicha ID
$sql = "SELECT * FROM JUGUETES WHERE ID = ?";

$resultado = $conexion->prepare($sql);

$resultado->execute(array($id));

$registro = $resultado->fetch(PDO::FETCH_OBJ);
 
 
 //y ahora los vamos a mostrar en un formulario editable 
 ?>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> "> 
  <table width="25%" border="0" align="center">
    <tr>
      <td>ID</td>
      <td><label for="id"></label>
      <input type="text" name="id" id="id" value="<?php echo $registro->ID?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" value="<?php echo $registro->NOMBRE?>" ></td>
    </tr>
    <tr>
      <td>Edad</td>
      <td><label for="ape"></label>
      <input type="text" name="edad" id="edad" value="<?php echo $registro->EDAD?>"></td>
    </tr>
    <tr>
      <td>Peso</td>
      <td><label for="dir"></label>
      <input type="text" name="peso" id="peso" value="<?php echo $registro->PESO?>" ></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="dir"></label>
      <input type="text" name="precio" id="precio" value="<?php echo $registro->PRECIO?>" ></td>
    </tr>
    
    <tr>
      <td colspan="2"><input type="submit" name="Submit"  value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>