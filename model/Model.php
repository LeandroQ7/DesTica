<?php
require_once 'core/ConexionBD.php'; 
class Model {
	private $conn;
	public function __construct() {    
	$conexion=new ConexionBD();
	$this->conn=$conexion->conectar();

	}

     public function prueba($valoration){ 

          file_put_contents("hola.txt","hhhh");
          return "Prueba: ".$valoration;  
        }

    public function setOpinion($radio, $comment){ 
        $query="INSERT INTO ".TBL_CALIFICACION." (calification, opinion) VALUES ($radio, '$comment')";
        mysqli_query($this->conn, $query);
        return 1;  
    }
    
    public function getValoration(){ 
      $sql="SELECT AVG(calification) as promedio FROM ".TBL_CALIFICACION."";
      $result=mysqli_query ($this->conn,$sql);  

      $valoration = mysqli_fetch_array($result);
      return $valoration[0];
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

        public function getMyFavorites($idUser){ 

        $int = (int)$idUser;

          $query=mysqli_query ( $this->conn,"select d.title, f.iduser, f.iddestination, d.image from tbdestination d, tbfavorite f where iduser='$idUser'
and d.iddestination = f.iddestination;");  //Ejecuta procedimiento almacenado
         
          $data= mysqli_fetch_all($query);
          
          $array = array();
          if (isset($data)) {    //verificacion si hay datos

            

          } 
          return $data;  
        }


} //end model
?>