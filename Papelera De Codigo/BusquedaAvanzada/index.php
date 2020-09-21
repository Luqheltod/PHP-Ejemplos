<?php 

require_once "utilidades.php";
?>
<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Buscar</title>
        
        <style>
		
		table{
			width:300px;
			margin:auto;
			background-color:#FFC;
			border:2px solid #F00;
			padding:5px;
			
		}
		
		td{
			text-align:center;
			
		}
		
		
		</style>
    
    </head>
    
    
    
    <body>
    
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <table>
           <tr>
             <td> Seccion </td><td><input type="text" name="seccion" id="seccion"></td></tr>
           <tr>
             <td>Nombre Articulo</td>
             <td><input type="text" name="nombreArticulo" id="nombreArticulo"></td>
           </tr>
           <tr>
             <td>Pais</td>
             <td><select name="pais">
             
             <?php $arrayPaises= Utilidades::obtenerPaises();
             
            foreach ($arrayPaises as $pais) :
                 foreach ($pais as $valor):
                     
                 
             
             ?>
  <option value="<?php echo $valor?>"><?php echo $valor?></option> 
 
 <?php endforeach; endforeach;?>
 <option value="Cualquiera" >Cualquiera</option>
</select></td>
           </tr>
           <tr>
             <td>Precio desde </td>
             <td><input type="number" name="desde" id="desde"></td>
           </tr>
           <tr>
             <td>Precio hasta</td>
             <td><input type="number" name="hasta" id="hasta"></td>
           </tr>
          
           <tr><td colspan="2"> <input type="submit" name="Submit" value="Buscar">
        </td></tr></table>
        </form>
    
    <br> <br> <br> 
    
   
    
   
   
   <?php  
   
   
   if(isset($_POST["Submit"])){
       if(isset($_GET["numero"])){
           $pagina = $_GET["numero"];
       } else{
           $pagina = 1;
       }
       if($_POST["pais"] =="Cualquiera"){
           $pais = '%';
       }else{
           $pais = $_POST["pais"];
       }
       
       
       $registros_paginas = 5;
       $empezar_desde =($pagina-1)*$registros_paginas;
       
      $seccion = $_POST["seccion"];
      $nombre= $_POST["nombreArticulo"];
      
      $arrayBusqueda = Utilidades::busquedaSinPrecio($seccion, $nombre, $pais);
      $num_filas = count($arrayBusqueda);
      
      if(empty($_POST["desde"])|| empty($_POST["hasta"]) ){
    
       
       
       $arrayBusqueda = Utilidades::busquedaSinPrecio($seccion, $nombre, $pais,$empezar_desde,$registros_paginas);
       
     
      } else{
   $desde =$_POST["desde"];
   $hasta = $_POST["hasta"];
          $arrayBusqueda = Utilidades::busquedaConPrecio($seccion, $nombre, $pais,$desde,$hasta);
   
   } 
   
   //----------------------------------------PAGINACION-------------------------------------//
   //unas variables con  cuantos registros por pagina y en que pagina va a salir al principio
   
  
   

  
   
   $total_paginas = ceil($num_filas/$registros_paginas);
  
   }
   
   ?>
    
 
 
 <?php  
 
 if(isset($_POST["Submit"])){
     
     if($arrayBusqueda){
 
 
 ?>
    
    
  <table >

  <tr>

    <th>Seccion</th>

    <th>Nombre Articulo</th>

    <th>Pais Origen</th>
    
    <th>Precio</th>

  </tr>

<?php   



foreach ($arrayBusqueda as $value):
     
  
         
     


?>

  <tr>

    <td><?php echo $value[0];?></td>
     <td><?php echo $value[1];?></td>
      <td><?php echo $value[2];?></td>
       <td><?php echo $value[3];?></td>


</tr>
 

    
   <?php endforeach;  }  else{
   
       $sinResultado = "sin resultados";
   }?> 
    
    </table>
    <?php if(isset($sinResultado)){
    
        echo $sinResultado;
    }}?>
    
    
    <?php for ($i = 1; $i <=$total_paginas; $i++) {
    
    echo " " . "<a href='index.php?numero=$i'>" .  $i . "</a> ";
}?>
    </body>
    

</html>