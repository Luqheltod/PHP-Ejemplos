<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertando una fila </title>
</head>
<body>


<p> Introduce el ID de la fila que deseas modificar. <p> 


 <form action="modificarBBDD2.php" method="post">
        <table>
           <tr>
             <td>ID</td><td><input type="text" required name="id" id="id"></td></tr>
           
           <td colspan="2"> <input type="submit" name="Submit" value="Modificar">
        </td></tr></table>
        </form>
<?php

//el id ira a la nueva pagina, donde mostraremos los datos de ese ID 

?>



</body>

</html>