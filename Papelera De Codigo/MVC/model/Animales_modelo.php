<?php

class Animales_model
{

    private $db;

    private $animales;

    public function __construct()
    {

        // se encarga de conectar con la bd , cuando creemos una instancia de animales se creara una conexion
        require_once 'model/Conexion.php';

        $this->db = Conexion::conectar();

        $this->animales = array();
    }

    public function get_animales()
    {

        // en este caso vamos a obtener todos los animales.
        $sql = "SELECT * FROM ANIMAL";

        // en resultado tenemos almacenados ya los registros de los animales 
        $resultado = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        
        //asi que asignamos a la variable animales de la clase, el array resultado. y lo devolvemos.
        $this->animales = $resultado;
        
        return $this->animales;
    }
}



?>