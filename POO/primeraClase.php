<?php
//gsprogramacion.com

//para crear una clase, simplemente usamos la palabra reservada class y le damos un nombre
//por convenio, los nombres de las clases empieza por una letra mayuscula
class Telefono {
    
    //vamos a definir las propiedades de nuestra clase
    
    public $variable1= "pantalla";
    public $variable2= "bateria";
    public $variable3= "carcasa";
    
    //y una funcion de la propia clase
    
    public function materialTelefono(){
        
        //en este metodo indicamos por ejemplo, que muestra las variables que tenemos arriba
        echo  "el telefono tiene $this->variable1 , $this->variable2 y $this->variable3" ;
        
    }
}

//con la siguiente linea, en la variable telefono, asignamos un objeto  de nuestra clase Telefono
$telefono = new Telefono();

//ahora podemos usar un metodo de la clase, que simplemente muestra lo que le hemos indicado anteriormente
$telefono->materialTelefono();

?>