<?php


class Telefono {
    
    private  $color;
    
    private  $gama;
    
    private $precio;
    
    //constructor
    function __construct(){
        
        $this->color ="" ;
        
        $this->gama="";
        
        $this->precio="";
    }
    
    //Las siguiente 3 funciones, son getters. Devuelven la variable
    public function getColor()
    {
        return $this->color;
    }
    
    
    public function getGama()
    {
        return $this->gama;
    }
    
    
    public function getPrecio()
    {
        return $this->precio;
    }
    
    //Las siguiente 3 funciones, son setters. Sirven para establecer la variable.
    public function setColor($color)
    {
        $this->color = $color;
    }
    
    
    public function setGama($gama)
    {
        $this->gama = $gama;
    }
    
    
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    
    
    //Vamos a realizar una funcion que nos diga las caracteristicas del objeto creado
    
    public function dimeCaracteristicas(){
        
        echo "El telefono es de color " . $this->getColor() . " de gama " . $this->getGama() . " y tiene un precio de " . $this->getPrecio();
    }
    
    
}
$telefono = new Telefono();

$telefono->setColor("Azul");//le pasamos como parametro el color de nuestro telefono. Y en las otras lineas las demas caracteristicas
$telefono->setGama("Media");
$telefono->setPrecio(300);
$telefono->dimeCaracteristicas();

//Podeis crear otros telefonos y asignarles otras caracteristicas.
//Si ahora por ejemplo quisiesemos saber de que color es el telefono, simplemente usariamos $telefono->getColor();
?>