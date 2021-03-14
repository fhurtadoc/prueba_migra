<?php 

include("db.php");
include("db_postgrest.php");


class function_migra  extends conexion { 

    
    public $data_consulta=array();
    public $dbi=null;
    
    public function __construct() {
       
        
       //prueba vim esto es una prueba de vim   

    }
        public function queryConsulte($sql_string){
            $conexion=new Conexion();
            $respuesta=$conexion->buscar($sql_string);
            return $respuesta;          
            
        }

   
            $conexion=new Conexion_postgres();
            $respuesta=$conexion->insert($sql_string);            
            return $respuesta;          
            
        }



        public function function_migra_get(){

            $tablas=array("consulta", "ingreso" );
            $colums=array("nombre", "cedula",  "direccion", "email", "tarjeta_profesional"); 


            foreach( $tablas as $tabla){

                switch ($tabla) {

                    case 'consulta':

                        $query="SELECT * FROM consulta ";
                        echo $query;
                        $this->data_consulta=$this->queryConsulte($query);                       
                        
                        break;

                    case 'ingreso':

                        foreach($colums as  $colum){
                        
                            foreach($this->data_consulta as $object){
                              
                                                       
                                $query="INSERT INTO ingreso (codigo, propiedad, dato) VALUE ("."'".$object['codigo']."',"."'$colum',"."'".$object["$colum"]."') " ;
                                echo $query;
                                $result=$this->queryInsert($query);
                                
                                
                           }

                        }
                        
                        
                    
                    default:
                        
                        break;
                }


            }



            
        }
}
$object=new function_migra;
$object->function_migra_get();
?>
