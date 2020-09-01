<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 
//rescatamos el valor que le pasamos mediante la url
setcookie("idioma" , $_GET["idioma"] , time()+2002);

//lo vamos a redirigir dependiendo del idioma
header("Location:redireccion.php");
?>

</body>

</html>