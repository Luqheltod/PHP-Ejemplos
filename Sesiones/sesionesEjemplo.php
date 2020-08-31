<?php

session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 

//gsprogramacion.com

$_SESSION["arrayColores"] = array("rojo" , "amarillo");
$_SESSION["animal"] = "gato";

echo $_SESSION["arrayColores"][1];

echo $_SESSION["animal"];

// con session_unset(); borrariamos las variables
// con session_destroy(); cerrariamos la sesion

session_destroy();
?>

</body>

</html>