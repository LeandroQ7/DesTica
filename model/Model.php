		<?php
		
    require_once 'core/ConexionBD.php'; 

    

    class Model {
     
      private $conn;


      public function __construct() {    
        $conexion=new ConexionBD();


        $this->conn=$conexion->conectar();  
      }

  

      }
      ?>