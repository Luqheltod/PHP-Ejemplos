<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>




<form action="" method="post">   

Nombre: <input type="text"  name = "nombre"> 
<br>
Deportes: 

<br>
Futbol 
<input type="checkbox" name="futbol">
<br>
Basket
<input type="checkbox" name="basket">
<br>
Tenis 
<input type="checkbox" name="tenis">
<br>
Voley
<input type="checkbox" name="voley">
<br>

<input type="submit" name = "enviar" value = "Enviar">

</form>

<?php 
//vemos que cada checkbox tiene el atributo name distinto. 

//vamos a comprobar primero si se ha pulsado el boton de enviar

if(isset($_POST["enviar"])){  
    
    if(!empty($_POST["nombre"])){  //si se ha pulsado comprobamos que introdujo nombre, de lo contrario le asignamos anonimo.
        
        $nombre=$_POST["nombre"];
    }
    else{
        $nombre= "Anonimo";
    }
    
    $deportes = array();  //Ahora vamos a comprobar que checkbox ha pulsado el usuario, y los iremos añadiendo a este array que hemos declarado
    
    if(isset($_POST["futbol"])){
        
        $deportes[] = "Futbol";
    }
    
    if(isset($_POST["basket"])){
        
        $deportes[] = "Basket";
    }
    
    if(isset($_POST["tenis"])){
        
        $deportes[] = "Tenis";
    }
    
    if(isset($_POST["voley"])){
        
        $deportes[] = "Voley";
    }
    
    echo "Usuario: $nombre <br>  Practica: <br>";
    
    if(!empty($deportes)){  //si el array deportes no esta vacio, lo mostraremos con un bucle foreach
    foreach ($deportes as $value) {
      
        echo $value . "<br>";
    }
    }else{  //de lo contrario, si esta vacio, mostraremos que no practica deportes. 
        echo "Sin deportes";
    }
}



?>

</body>

</html>