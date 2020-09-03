<?php


class Telefono {
    //para declarar que variables tendra el objeto, usamos "var"
    var $color;
    
    var $gama;
    
    var $precio;
    
    
    
    //ahora vamos a ver como se crea el constructor
    
    function __construct(){
        
        $this->color ="" ;
        
        $this->gama="";
        
        $this->precio="";
    }
    
    //por defecto este constructor nos crea un objeto de la clase Telefono, en este caso,
    //no hemos asignado nada a las variables, por lo tanto estan vacias.
    
    public function colorlTelefono(){
        
        echo "El telefono es de color $this->color";
    }
    
}
//si creamos un telefono , sus variables estaran vacias
$telefono = new Telefono();
$telefono->materialTelefono();
//si le asignamos un color a nuestro telefono, nos lo mostrará la siguiente vez que llamamos al metodo.
$telefono ->color = "azul";
$telefono->materialTelefono();
?>