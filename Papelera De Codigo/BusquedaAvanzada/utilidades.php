<?php





class Utilidades{
    
    
    
    public static function busquedaConPrecio($seccion, $nombre, $pais,$desde,$hasta) {
        
        
        if(empty($seccion)){
            
            $seccion = '%';
        }
        
        if(empty($nombre)){
            
            $nombre = '%';
        }
        if(empty($pais)){
            
            $pais = '%';
        }
        
        
        require_once 'Conexion.php';
        
        $sql = "SELECT `SECCION`, `NOMBRE ARTICULO`, `PAIS DE ORIGEN`, `PRECIO` FROM `articulos` WHERE
 `SECCION` LIKE :seccion AND `NOMBRE ARTICULO` LIKE :nombre AND `PAIS DE ORIGEN` LIKE :pais AND PRECIO BETWEEN $desde AND $hasta ";
        
        $conexion = Conexion::conectar();
        
        $resultado =  $conexion->prepare($sql);
        
        $resultado -> bindValue(":seccion", "%".$seccion);
        $resultado -> bindValue(":nombre", "%".$nombre . "%");
        $resultado -> bindValue(":pais", "%".$pais);
        $resultado->execute();
        $arrayBusqueda = $resultado->fetchAll(PDO::FETCH_NUM);
        
        if($arrayBusqueda){
            return $arrayBusqueda;
        } else{
            return false;
            
        }
    }
    
    //esta funcion devolvera un array con los resultados, o un false si no hay .
    public static function busquedaSinPrecio($seccion, $nombre, $pais,$empezar_desde="0",$registros_paginas="18446744073709551615") {
        
        
        if(empty($seccion)){
            
            $seccion = '%';
        }
        
        if(empty($nombre)){
            
            $nombre = '%';
        }
        if(empty($pais)){
            
          $pais = '%';
        }
        
        require_once 'Conexion.php';
        
        $sql = "SELECT `SECCION`, `NOMBRE ARTICULO`, `PAIS DE ORIGEN`, `PRECIO` FROM `articulos` WHERE 
 `SECCION` LIKE :seccion AND `NOMBRE ARTICULO` LIKE :nombre AND `PAIS DE ORIGEN` LIKE :pais LIMIT $empezar_desde,$registros_paginas";
        
        $conexion = Conexion::conectar();
        
       $resultado =  $conexion->prepare($sql);
        
       $resultado -> bindValue(":seccion", "%".$seccion);
       $resultado -> bindValue(":nombre", "%".$nombre . "%");
       $resultado -> bindValue(":pais", "%".$pais);
       $resultado->execute();
       $arrayBusqueda = $resultado->fetchAll(PDO::FETCH_NUM);
        
       if($arrayBusqueda){
        return $arrayBusqueda;
       } else{
           return false;
           
       }
    }
    
    public static function obtenerPaises(){
        
        require_once 'Conexion.php';
       $sql="SELECT DISTINCT `PAIS DE ORIGEN` FROM `articulos`";
        
       $conexion = Conexion::conectar();
       $resultado = $conexion->query($sql)->fetchAll(PDO::FETCH_NUM);
       return $resultado;
    }
    
}





?>