<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Radio button </title>
</head>
<body>




<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

Numero 1: 
<input type="text" name="numero1" >
Numero 2: 
<input type="text" name="numero2" >
<br>
<label for="sumar">Sumar</label>
<input type="radio" id="sumar" name="operacion" value="sumar" checked>
<label for="Restar">Restar</label>
<input type="radio" id="restar" name="operacion" value="restar">
<input type="submit" name="enviando" value = "Muestra el resultado">

<!--vemos que los dos input type=radio llevan el mismo name, pero distinto value -->
</form>

<br>


<?php 
//declaramos las variables vacias
$numero1 = $numero2 = "";

//si se ha pulsado el boton de enviar
if(isset($_POST["enviando"])){
    
    
    //damos valor a nuestrar variables vacias
    $numero1= $_POST["numero1"];
    $numero2= $_POST["numero2"];
    
    //y asiganmos a la variable operacion el valor del boton radio
    $operacion = $_POST["operacion"];
    
   //la variable resultado vacia, para asignarle valor dependiendo de si el usuario quiere restar o sumar
    $resultado="";
    
       if ($operacion =="sumar"){
           
           $resultado = $numero1 + $numero2;
       }else{
           $resultado = $numero1 - $numero2;
       }
       
     // y simplemente nos queda mostrar el resultado 
   
       echo $resultado;

}

?>

</body>

</html>