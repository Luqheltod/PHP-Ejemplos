<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 
//incluimos el archivo de conexion a la BBDD
require "Conexion.php";
//Aqui vamos a realizar las modificaciones si se ha pulsado el boton. 
//fijense que hemos cambiado el nombre al submit, ahora es con minuscula, para diferenciarlo del anterior. 
if(isset($_POST["submit"])){
    //guardamos en variables los nuevos campos 
    $conexion = Conexion::conectar();
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $precio = $_POST["precio"];
    $peso = $_POST["peso"];
    $sql = "UPDATE juguetes SET NOMBRE = '$nombre', EDAD = '$edad', PRECIO = '$precio', PESO ='$peso' WHERE ID = $id;";
    $resultado = $conexion->exec($sql);
    
    if($resultado!==0){
        echo "Datos modificados";
    }
  
}
?>

<?php 

//la primera vez el codigo de arriba no se ejecutara, el boton submit de esta pagina nunca se pulso
$conexion = Conexion::conectar();

//vamos a buscar los datos de la ID seleccionada. 

$sql = "SELECT * FROM JUGUETES WHERE ID =" . $_POST["id"];

$resultado = $conexion->query($sql);

$fila = $resultado->fetch(PDO::FETCH_ASSOC);

$resultado->closeCursor();
//tenemos los datos en nuestro array $fila, de la id que el usuario ha seleccionado. 
//vamos a mostrarlos en formulario, el ID no se puede modificar, para ello usamos readonly


?>

<p> Modifica los campos que necesites <p> 


 <form action="" method="post">
        <table>
           <tr>
             <td>ID</td><td><input type="text"  name="id" id="id" value=<?php echo $fila["ID"];?> readonly ></td></tr>
           <tr>
           <tr>
             <td>Nombre</td><td><input type="text" required name="nombre" id="nombre" value=<?php echo $fila["NOMBRE"];?>></td></tr>
           <tr>
             <td>Edad</td>
             <td><input type="number" required name="edad" id="edad" value=<?php echo $fila["EDAD"];?>></td>
           </tr>
           <tr>
             <td>Precio</td>
             <td><input type="number" required name="precio" id="precio" value=<?php echo $fila["PRECIO"];?>></td>
           </tr>
           <tr>
             <td>Peso </td>
             <td><input type="number" required name="peso" id="peso" value=<?php echo $fila["PESO"];?>></td>
           </tr>
           <td colspan="2"> <input type="submit" name="submit" value="Modificar">
        </td></tr></table>
        <a href="modificarBBDD.php"> Volver </a>
        </form>




</body>

</html>