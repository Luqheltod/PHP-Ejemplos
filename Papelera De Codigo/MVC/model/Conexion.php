<?php

class Conexion {
    
    
    
    
    public static function conectar(){
        
      require ("model/config.php");
        
        try{
            //creamos un nuevo objeto PDO con las constantes que hemos definido en config.php, de esta forma el codigo esta mas modularizado.
            
            
            $conexion = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE, DB_USUARIO, DB_PASSWORD);
            
            // establecemos el tipo de errores que vamos a obtener:
            
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //establecemos el charset , para las eñes tildes etc
            $conexion->exec("SET CHARACTER SET ".DB_CHARSET);
            
        }catch (Exception $e){
            
            die("Error" . $e->getMessage()); 
            echo "Linea del error " .  $e->getLine();
        }
        
        
        return $conexion;
    }
    
    
  
    
}





?>