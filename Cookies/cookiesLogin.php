<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Cookie </title>
</head>
<body>


<h1> Introduce tus datos</h1>


<?php  

//si la cookie no esta vacia, asignamos al nombre el valor, para que se muestre en el formulario, de lo contrario se queda en blanco
if(!empty($_COOKIE["cookie"])){
    
    $nombre = $_COOKIE["cookie"];
} else{
    $nombre = "";
}

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

Login:  <input type="text" name = "login" value="<?php echo $nombre?>"> 
Password: <input type="password" name="password" required> 
<input type="submit" name="Submit" value="Iniciar Sesion">

</form>
</body>



<?php  


if(isset($_POST["Submit"])){
    
    if($_POST["login"]=="root" && $_POST["password"]=="root"){
        
        echo "Bienvenido Root";
        //si hemos hecho bien el login, creamos la cookie, la cual se leera la proxima vez que carguemos la pagina. 
        setcookie("cookie" , "root", time()+15 , "/");
    }else{
    
    echo "Contraseña Incorrecta eh!, prueba root root";
}
}
?>
</html>