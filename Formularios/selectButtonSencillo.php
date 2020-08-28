<html>

<head>
  <title>Select</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    Ingrese primer valor:
    <input type="text" name="valor1">
    <br>
    Ingrese segundo valor:
    <input type="text" name="valor2">
    <br>
    <select name="operacion">
      <option value="suma">sumar</option>
      <option value="resta">restar</option>
    </select>
    <br>
    <input type="submit" name="operar" value="Operasion">
  </form>
  
  
  <?php 
  
  if(isset($_POST["operar"])){
      
      $numero1= $_POST["valor1"];
      $numero2= $_POST["valor2"];
      
      if($_POST["operacion"] == "suma"){
          
          echo "Resultado : " . ($numero1 +$numero2) ;
      }else{
          echo "Resultado : " . ($numero1-$numero2) ;
      }
  }
  
  
  ?>
  
</body>

</html>