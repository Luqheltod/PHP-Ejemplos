<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<h2> Formulario sencillo</h2>

<form method="post"  action="">

Nombre: <input type="text" name = "nombre">  
<br> <br>

Email: <input type="text" name = "email">
<br> <br> 

Comentario
 <br><br>
<textarea name="comentario" rows="5" cols="40"></textarea>
<br><br>
Web: <input type="text" name = "web">
<br><br>

Genero : 
<input type="radio" name="genero" value= "shemale"> Shemale
<input type="radio" name="genero" value= "gay"> Hermafrodita
<input type="radio" name="genero" value= "bizarro"> Bizarro
<br> <br> 
<input type="submit" name="submit" value="Submit">

</form>

<?php 

$nombre= $email =$genero =$web= $comentario =  "";


//aqui estamos comprobando si se ha pulsado el boton de enviar, si no se ha pulsado, esta parte del codigo no se ejecuta.
//Al pulsarse, el formulario llama a esta misma pagina, ya que asi se lo hemos indicado en action, pero ahora $_POST["submit"]
// ya esta pulsado, por lo tanto esta parte del codigo si se leerá. 
if(isset($_POST["submit"])){
    
    $nombre= $_POST["nombre"];  //aqui vemos como se guardan los valores en el array asociativo $_POST, y nosotros asignamos a variables esos datos
    $email = $_POST["email"];
    $comentario=$_POST["comentario"];
    $web = $_POST["web"];
    $genero = $_POST["genero"];
    
}

//aqui simplemente vamos a mostrar esos datos que se introdujeron en el formulario.
echo "<h2> Tus Cosas: </h2>";

echo $nombre . '<br>';
echo $email . '<br>';
echo $comentario . '<br>';
echo $web . '<br>';
echo $genero . '<br>';

?>

</body>

</html>