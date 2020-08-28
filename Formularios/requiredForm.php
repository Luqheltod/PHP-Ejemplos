<!doctype html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta charset="utf-8">
<title> Validation Required  </title>
</head>
<body>


<?php

//vamos a declarar como variables vacias tanto los errores, como las posibles variables aptas, para posteriormente utilizarlas y que
//PHP no lanze ningun mensaje.
$nombreErr= $emailErr=$generoErr=$webErr = "";  //variables de error
$nombre= $email =$genero =$web= $comentario = ""; //variables aptas

//Si el boton de enviar ha sido pulsado, entrará aqui. Vease que la primera vez que se ejecuta la pagina nunca entra en este IF 
if(isset($_POST["submit"])){
    
    //si cualquiera de estos campos esta vacio, entrara en cada IF correspondiente y modificará la variable de error. Y si no está vacio, asignará
    //su valor a la variable apta
    if(empty($_POST["nombre"])){
        $nombreErr = "Se requiere nombre";
    } else{
        
        $nombre= $_POST["nombre"];
    }
    
    if(empty($_POST["email"])){
        $emailErr = "Se requiere mail";
    } else{
        
        $email = $_POST["email"];
    }
    
    if(empty($_POST["genero"])){
        $generoErr = "Se requiere genero";
    } else{
        
        $genero = $_POST["genero"];
    }
    
    if(empty($_POST["web"])){
        $webErr = "Se requiere web";
    } else{
        
        $web = $_POST["web"];
    }
}

if(empty($_POST["comentario"])){ //aqui no nos importa que el comentario este vacio, por lo tanto no hay variable de error
    
    $comentario="";
}else{
    
    $comentario=$_POST["comentario"];
}
    
  
    ?>




<h2> Formulario sencillo</h2>

<form method="post"  action="">

Nombre: <input type="text" name = "nombre">   <span class="error"> * <?php echo $nombreErr;?></span>
<br> <br>

Email: <input type="text" name = "email"> <span class="error"> * <?php echo $emailErr;?></span>
<br> <br> 

Comentario:
 <br><br>
<textarea name="comentario" rows="5" cols="40"></textarea>
<br><br>
Web: <input type="text" name = "web"> <span class="error"> * <?php echo $webErr;?></span>

<br><br>

Genero : 
<input type="radio" name="genero" value= "hombre"> Hombre
<input type="radio" name="genero" value= "mujer"> Mujer

<span class="error"> * <?php echo $generoErr;?></span>
<br> <br> 
<input type="submit" name="submit" value="Enviar">

</form>


    




<?php 

echo "<h2> Tus Datos: </h2>";

echo $nombre . '<br>';
echo $email . '<br>';
echo $comentario . '<br>';
echo $web . '<br>';
echo $genero . '<br>';

?>


</body>

</html>