<?php
//gsprogramacion.com


class Telefono {
    
    
    
    public $variable1= "pantalla";
    public $variable2= "bateria";
    public $variable3= "carcasa";
    
    
    
    public function materialTelefono(){
        
        
        echo  "el telefono tiene $this->variable1 , $this->variable2 y $this->variable3" ;
        
    }
    
    //esta nueva funcion , permite cambiar la variable1 del telefono
    function setMaterial(){   //el classic setter
        $this->variable1 = "azulejo";
    }
}
$telefonoAzulejo = new Telefono(); //este telefono tiene de momento, pantalla , bateria y carcasa
$telefonoAzulejo->setMaterial(); //ahora este telefono en vez de pantalla, le hemos puesto un azulejo

$telefono = new Telefono(); // un telefono normal, no le cambiamos nada
$telefono->materialTelefono(); //nos mostrara las variables normales

echo "<br>";

$telefonoAzulejo->materialTelefono(); //nos mostrara azulejo en vez de pantalla

?>