<!doctype html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<meta charset="utf-8">
<title> Validation Avanzada  </title>
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
    //vamos a añadir que si el nombre tiene caracteres extraños, no lo acepte 
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
        $nombreErr = "nombre raro pon otro";
    }
    
    
    if(empty($_POST["email"])){
        $emailErr = "Se requiere mail";
    } else{
        
        $email = $_POST["email"];
        //aqui añadimos que si el email no es correcto, tambien lo indique
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Mail Invalido";
        }
    }
    
    
    if(empty($_POST["genero"])){
        $generoErr = "Se requiere genero";
    } else{
        
        $genero = $_POST["genero"];
    }
    
    if(empty($_POST["web"])){
        $webErr = "Se requiere web";
    } else{
        //añadimos una expresion regular para la web
        $web = $_POST["web"];
    }if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
        $webErr = "Invalid URL";
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

Nombre: <input type="text" name = "nombre" value="<?php echo $nombre;?>">   <span class="error"> * <?php echo $nombreErr;?></span>
<br> <br>

Email: <input type="text" name = "email" value = "<?php echo $email; ?>"> <span class="error"> * <?php echo $emailErr;?></span>
<br> <br> 

Comentario del señor:
 <br><br>
<textarea name="comentario" rows="5" cols="40"><?php echo $comentario;?></textarea>
<br><br>
Web: <input type="text" name = "web"> <span class="error"> * <?php echo $webErr;?></span>

<br><br>

Genero : 
<input type="radio" name="genero" <?php if (isset($genero)&& $genero =="hombre") echo "checked";?> value= "hombre"> Hombre
<input type="radio" name="genero" <?php if (isset($genero)&& $genero =="mujer") echo "checked";?> value= "mujer"> Mujer
<span class="error"> * <?php echo $generoErr;?></span>
<br> <br> 
<input type="submit" name="submit" value="Submit">

</form>


    







</body>

</html>