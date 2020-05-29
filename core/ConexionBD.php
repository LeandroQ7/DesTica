<?php

class ConexionBD {     //Esta clase se encarga de guardar las credenciales para conexion a BD
    
    private $conn;
    
    public function __construct (){

        //$this->conn= mysqli_connect("199.168.189.114","przkeeuy_ucr","4)u7KlKdk3eg");
        
        $this->conn= mysqli_connect("163.178.107.10","laboratorios","UCRSA.118");

        if(!$this->conn){
            echo "problema de conexion";
            exit();
        } 
        //mysqli_select_db($this->conn,"przkeeuy_dbIF7103");
        mysqli_select_db($this->conn,"expertos_formulario");
       
    } 

    public function conectar(){
        return $this->conn;
    } 
                    
} 

?>
