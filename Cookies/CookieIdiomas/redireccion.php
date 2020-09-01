<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 


//este codigo simplemente sirve de transporte.

if(!$_COOKIE["idioma"]){
    
    header("Location:index.php");
}else if($_COOKIE["idioma"]=="es"){
    
    header("Location:spanish.php");
}else if($_COOKIE["idioma"]=="eng"){
    
    header("Location:english.php");
    
}


?>

</body>

</html>