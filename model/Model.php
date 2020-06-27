<?php
require_once 'core/ConexionBD.php'; 
require_once 'model/domain/Destiny.php'; 

class Model {

	private $conn;
	public function __construct() {    
	$conexion=new ConexionBD();
	$this->conn=$conexion->conectar();

	}

   
    public function setOpinion($radio, $comment){ 
        $query="INSERT INTO ".TBL_CALIFICACION." (calification, opinion) VALUES ($radio, '$comment')";
        mysqli_query($this->conn, $query);
        return 1;  
    }

    public function getEstimate($personas,$dias,$precio){ 
     
      return 1;  
    }
    
    public function getValoration(){ 
      $sql="SELECT AVG(calification) as promedio FROM ".TBL_CALIFICACION."";
      $result=mysqli_query ($this->conn,$sql);  

      $valoration = mysqli_fetch_array($result);
      return $valoration[0];
    }


	  public function getTopTen(){ 


          $query=mysqli_query ( $this->conn,"call sp_topten_list()");  //Ejecuta procedimiento almacenado
          $data= mysqli_fetch_all($query);
           
          return $data;  
        }

         public function getTopTen2(){ 
          
 
           
          return "";  
        }

        public function getMyFavorites($idUser){ 

        $int = (int)$idUser;

          $query=mysqli_query ( $this->conn,"select d.title, f.iduser, f.iddestination, d.image from tbdestination d, tbfavorite f where iduser='$idUser'
and d.iddestination = f.iddestination;");  //Ejecuta procedimiento almacenado
         
          $data= mysqli_fetch_all($query);
        
          return $data;  
        }

          public function getProfile($idUser){ 
          $query=mysqli_query ( $this->conn,"select nameUser, email, environment,road_type,weather from tbuser where iduser=$idUser;");  
         
          $data= mysqli_fetch_all($query);
          $array = array();
          return $data;  
        }

        public function setProfile($idUser,$name,$email,$environment,$road_type,$weather){ 
          $query=mysqli_query ( $this->conn,"update tbuser SET nameUser='$name' , email='$email', environment='$environment' ,road_type='$road_type' ,weather='$weather'  WHERE iduser=$idUser ;");  
          //mysqli_fetch_all($query);
          //return $data;  
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

        public function getAllDestinations(){ 

          $query=mysqli_query ( $this->conn,"call sp_get_all_destinations()");  //Ejecuta procedimiento almacenado
          $data= mysqli_fetch_all($query);

         return $data;
           
        }

        public function getDestiny($idDestination){ 

          $query=mysqli_query ( $this->conn,"Select iddestination,amount, location,description,title, image, video FROM dbdestica.tbdestination where iddestination='$idDestination';");  //Ejecuta procedimiento almacenado
          $data= mysqli_fetch_all($query);

         return $data;
           
        }


        //---------Algoritmos-------

    public function getAllTitles(){
       $query=mysqli_query ( $this->conn,"call sp_get_destination_titles()"); 
       $data= mysqli_fetch_all($query);
       return $data;
    }


    public function bayes($environment,$road,$weather,$rangeOfPeople,$allTitles){  
    $userValues = array($environment,$road,$weather,$rangeOfPeople);  //muestra a evaluar\

    //var_dump($userValues);
    $title="";
    $image="";
    $amount="";
    $iddestination="";
    
    
    $probabilityOfFeatureArray= array(0.25,1/3,1/3,1/3);

  
    $valorM=4;   //valor de M
    $valorN=count($allTitles);   //valor de N


   $query=mysqli_query ( $this->conn,"select location, camino,tiempo,rango_personas,title,image,amount,iddestination from tbdestination;"); 
   $searchData= mysqli_fetch_all($query);

    $loopStop=0;
    
    foreach ($allTitles as $key => $actualDestiny) {

        $frequencyArray= array('A' => 0,'B' => 0, 'C' => 0,'D' => 0);


      if($loopStop<3){
         foreach ($searchData as $key => $value) {
          if($value[4]==$actualDestiny[0]) {

            $title=$value[4];
            $image=$value[5];
            $amount=$value[6];
            $iddestination=$value[7];
             
            //$frecuencyArray['A']++;
             $frequencyArray=$this->destinyFrequency($userValues,$frequencyArray,$value);
             //var_dump( $frequencyArray);
          }
        }
        $loopStop++;
        //var_dump( $valores);
    
        $totalValue=$this->frequencyProbability($frequencyArray,$probabilityOfFeatureArray,$valorM,$valorN);
        $object = new Destiny;
        $object->destinyID = $iddestination;
        $object->destinyName = $title;
        $object->image = $image;
        $object->amount = $amount;
        $object->probabilityValue = $totalValue;

       $myArray[] = $object;
  
      }
       
        
    }
    //sort from lowest to bigger probability
    usort($myArray,function($first,$second){
    return $first->probabilityValue > $second->probabilityValue;
});
    var_dump( $myArray);
    //usort($myArray, "cmp");


     return $myArray;
    }

    public function destinyFrequency($userValues,$frequencyArray,$bdValues){

          if($userValues[0]==$bdValues[0]){
          $frequencyArray['A']++;    
          }
           if($userValues[1]==$bdValues[1]){
          $frequencyArray['B']++;    
          }
           if($userValues[2]==$bdValues[2]){            
          $frequencyArray['C']++;    
          }
           if($userValues[3]==$bdValues[3]){
            
          $frequencyArray['D']++;    
          }
    
                    
      return  $frequencyArray;
    }

    public function frequencyProbability($probabilityArray,$P,$M,$N){
      
    $longitud = count($probabilityArray);
    $frecuencia=array_values($probabilityArray);  //almacena los valores de cada probabilidad usando bayes

    for($i=0; $i<$longitud; $i++){            
    $frecuencia[$i]=($frecuencia[$i]+($M*$P[$i]))/($N+$M);      //(frecuencia+(M*P)/(N+M) -calculo de cada frecuencia    
    }
    return array_product($frecuencia)*(1/$N);   //producto total de cada frecuencia, que se retorna
    }


        //---------End Algoritmos-----


} //end model
?>