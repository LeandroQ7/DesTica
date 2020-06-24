<?php
require_once 'core/ConexionBD.php'; 
class Model {
	private $conn;
	public function __construct() {    
	$conexion=new ConexionBD();
	$this->conn=$conexion->conectar();

	}

     public function prueba(){ 

         
          return "Prubea";  
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


        public function checkIfFavorite($idUser,$idDestination){ 

        $int = (int)$idUser;

          $query=mysqli_query ( $this->conn,"select * from tbfavorite where iduser='$idUser' and iddestination='$idDestination'");  //Ejecuta procedimiento almacenado
         
          $data= mysqli_fetch_all($query);
          
          $array = array();
          if (isset($data)) {    //verificacion si hay datos

          } 
          return $data;  
        }

        public function verifyUser($userEmail,$password){ 

       

          $query=mysqli_query ( $this->conn,"Select nameUser, passwordUser, iduser from tbuser where email='$userEmail' and passwordUser='$password';");  //Ejecuta procedimiento almacenado
         
          $data= mysqli_fetch_all($query);
          
         return $data;
           
        }


} //end model
?>