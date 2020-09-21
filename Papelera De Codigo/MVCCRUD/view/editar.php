
<?php   //arreglar editar e insertar si se puede. ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<?php  
require_once ("../model/Conexion.php");
if(isset($_POST["Submit"])){   //si han pulsado el boton, hacemos el update con lo que haya dicho y redirigimos a index
    
    $id = $_POST["id"];
    
    $sql = "UPDATE viviendas SET precio = :precio, tamano = :tamanio, observaciones = :observaciones, fecha_anuncio = :fecha WHERE id = $id";

    
    $resultado = $conexion->prepare($sql);
    $resultado->bindValue(":precio",$_POST["precio"]);
    $resultado->bindValue(":tamanio", $_POST["tamanio"]);
    $resultado->bindValue(":observaciones", $_POST["obv"]);
    $resultado->bindValue(":fecha",$_POST["fecha"]);
   
    $resultado -> execute();
    header("Location:index.php");
}

?>

<body>

<h1>ACTUALIZAR</h1>

<p>
 <?php 
 
$conexion = Conexion::conectar();
 
$id = $_GET["id"];
 
$sql = "SELECT * FROM ANIMAL WHERE ID = ?";

$resultado = $conexion->prepare($sql);

$resultado->execute(array($id));

$registro = $resultado->fetch(PDO::FETCH_OBJ);
 
 
 
 ?>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> "> 
  <table width="25%" border="0" align="center">
    <tr>
      <td>ID</td>
      <td><label for="id"></label>
      <input type="text" name="id" id="id" value="<?php echo $registro->id?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Tipo</td>
      <td><label for="nom"></label>
      <input type="text" name="tipo" id="nom" value="<?php echo $registro->tipo?>"readonly="readonly"  ></td>
    </tr>
    <tr>
      <td>Zona</td>
      <td><label for="ape"></label>
      <input type="text" name="zona" id="ape" value="<?php echo $registro->zona?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $registro->direccion?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Dormitorios</td>
      <td><label for="dir"></label>
      <input type="text" name="dor" id="dir" value="<?php echo $registro->ndormitorios?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="dir"></label>
      <input type="text" name="precio" id="dir" value="<?php echo $registro->precio?>"></td>
    </tr>
    <tr>
      <td>Tamaño(m2)</td>
      <td><label for="dir"></label>
      <input type="text" name="tamanio" id="dir" value="<?php echo $registro->tamano?>"></td>
    </tr>
    <tr>
      <td>Extras</td>
      <td><label for="dir"></label>
      <input type="text" name="extras" id="dir" value="<?php echo $registro->extras?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>Observaciones</td>
      <td><label for="dir"></label>
      <input type="text" name="obv" id="dir" value="<?php echo $registro->observaciones?>"></td>
    </tr>
    <tr>
      <td>Fecha Anuncio</td>
      <td><label for="dir"></label>
      <input type="date" name="fecha" id="dir" value="<?php echo $registro->fecha_anuncio?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit"  value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>