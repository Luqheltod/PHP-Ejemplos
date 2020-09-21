<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>

</head>
<body>

<?php   require("model/paginacion.php")?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post"> 
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Especie</td>
      <td class="primera_fila">Raza</td>
      <td class="primera_fila">Genero</td>
      <td class="primera_fila">Color</td>
      <td class="primera_fila">Edad</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
		
		
		<?php   
		//esto nos va a mostrar el codigo que este hasta el foreach, es decir, un monton de tds por cada vivienda.
		foreach ($arrayAnimales as $animal):		?>
		
   	  <tr>
      <td><?php echo $animal["id"] ; ?></td>
      <td><?php echo $animal["nombre"] ;  ?></td>
      <td><?php echo $animal["especie"] ;  ?></td>
      <td><?php echo $animal["raza"] ; ?></td>
      <td><?php echo $animal["genero"] ;  ?></td>
      <td><?php echo $animal["color"] ;  ?></td>
      <td><?php echo $animal["edad"] ;  ?></td>
      
     
 
      <td class="bot"><a href="view/borrar.php?id=<?php echo $animal["id"]?>"> <input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class='bot'><a href="view/editar.php?id=<?php echo $animal["id"]?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>     
    
    
    <?php  endforeach;?>
    

    
      <!--  ESTOS SON LOS INPUT PARA INSERTAR,  -->
	<tr>
	<td></td>
      
      <td><input name="nombre" type="text"> 
      </td>
     
      <td><input name="especie" type="text"> 
      </td>
      
      <td><input type='text' name='raza' size='10' class='centrado'></td>
     
      <td><select name='genero' class='centrado'> 
      <option value="macho">Macho</option> 
      <option value="hembra">Hembra</option>
  
      </select>
      </td>
      
      <td><input type='text' name='color'  class='centrado' ></td>
      <td><input type='text' name='edad'  class='centrado' ></td>
     
     
      <td class='bot'><input type='submit' name='Submit' id='cr' value='Insertar'></td></tr>    
  </table>
  <?php 

  
  for ($i = 1; $i <=$total_paginas; $i++) {
    
    echo " " . "<a href='index.php?numero=$i'>" .  $i . "</a> ";
}
?>
 </form>

</body>

</html>