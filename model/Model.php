<?php
require_once 'core/ConexionBD.php'; 
class Model {
	private $conn;
	public function __construct() {    
	$conexion=new ConexionBD();
	$this->conn=$conexion->conectar();

	}

	  public function getTopTen(){ 

        $iteracion=0;        
        $resultadoEstilo="";  

          $query=mysqli_query ( $this->conn,"call sp_topten_list()");  //Ejecuta procedimiento almacenado
          $data= mysqli_fetch_all($query);
          
          $array = array();
          if (isset($data)) {    //verificacion si hay datos

            

          } 
          return $data;  
        }


} //end model
?>