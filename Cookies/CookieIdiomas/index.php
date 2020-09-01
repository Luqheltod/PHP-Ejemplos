<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>



<?php 


//aqui para q se sale el preguntar.
//ahora bien, esto con cookies desactivdas crashea q da gustirrinin
if(isset($_COOKIE["idioma"])){
    
    
    if ($_COOKIE["idioma"]=="es"){
        
        header("Location:spanish.php");
    } 
    
    if ($_COOKIE["idioma"]=="eng"){
        
        header("Location:english.php");
    }
    
}


?>

<!--  Notese que le pasamos por get un valor, que en este caso puede ser  es o eng 
Esto os resultara muy util en el futuro -->
<a href="creaCookie.php?idioma=es"> Español</a>
<a href="creaCookie.php?idioma=eng"> Ingles</a>



</body>

</html>