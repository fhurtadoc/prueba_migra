<?php

class Conexion_postgres {
    private $host   ="localhost";
    private $usuario="itsys";
    private $clave  ="12345";
    private $db     ="postgrest";
    public $conexion_postgres;

    public function __construct(){        

        $this->conexion_postgres = new mysqli ($this->host, $this->usuario, $this->clave,$this->db);
        
        
        
    }


    public function insert($query){

        $resultado=$this->conexion_postgres->query($query);
        var_dump($resultado);
        
            
        

    }

}





?>