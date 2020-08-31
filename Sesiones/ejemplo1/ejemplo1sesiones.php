<?php

session_start();
$_SESSION["ejemplo"] = "Esta sesion de ejemplo la mostramos";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>


<form action="ejemplo1sesionesVis.php" method="POST">

Nombre : <input type="text" name="nombre">

<input type="submit" value="Enviar"> 



</form>


</body>

</html>