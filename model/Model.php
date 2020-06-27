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

    public function newUser($email, $nameUser, $age, $gender, $passwordUser, $environment, $road_type, $weather){ 
      $query="INSERT INTO ".TBL_USER." (email, nameUser, age, gender, passwordUser, environment,road_type, weather) VALUES ('$email', '$nameUser', $age, '$gender', '$passwordUser', '$environment','$road_type', '$weather')";
      //file_put_contents("hola.txt",$query);
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
            $int = (int)$idUser;
          $query=mysqli_query ( $this->conn,"select nameUser, email, environment,road_type,weather from tbuser where iduser=$idUser;");  
         
          $data= mysqli_fetch_all($query);
          //$array = array();
          return $data;  
        }

        public function setProfile($idUser,$name,$email,$environment,$road_type,$weather){ 
          $query=mysqli_query ( $this->conn,"update tbuser SET nameUser='$name' , email='$email', environment='$environment' ,road_type='$road_type' ,weather='$weather'  WHERE iduser=$idUser ;");  
          //mysqli_fetch_all($query);
          //return $data;  
        }


        public function checkIfFavorite($idUser,$idDestination){ 
        
          $query=mysqli_query ( $this->conn,"select * from tbfavorite where iduser='$idUser' and iddestination='$idDestination'");  
         
          $data= mysqli_fetch_all($query);
          
          $array = array();
          if (isset($data)) {    //verificacion si hay datos
            foreach ($data as $key => $value) {
                
              if ($value[1]==$idDestination) {
                 return "Si";
               }else{
                return "No";
               } 
              
            }
          } 
        
        }

        public function updateFavorite($idUser,$idDestination,$action){ 
          if ($action=="On") {
                 $query=mysqli_query ( $this->conn,"insert INTO tbfavorite(iduser,iddestination) VALUES($idUser,$idDestination);");
               }else{
                $query=mysqli_query ( $this->conn,"delete FROM tbfavorite WHERE iduser=$idUser and iddestination=$idDestination;");
               } 
          
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
        
    
        $totalValue=$this->frequencyProbability($frequencyArray,$probabilityOfFeatureArray,$valorM,$valorN);
        $object = new Destiny;
        $object->destinyID = $iddestination;
        $object->destinyName = $title;
        $object->image = $image;
        $object->amount = $amount;
        $object->probabilityValue = $totalValue;

       $myArray[] = $object;
  
      
       
        
    }
    //sort from lowest to bigger probability
    usort($myArray,function($first,$second){
    return $first->probabilityValue > $second->probabilityValue;
});
    //var_dump( $myArray);
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

     public function euclides($userPreference){    //metodo que calcula el genero del usuario, recibe el recinto, promedio y estilo del usuario
      $environmentValue=0;
      $roadValue=0;
      $weatherValue=0;

      $environmentValueBD=0;
      $roadValueBD=0;
      $weatherValueBD=0;


        $iddestination=0;
        $title=0;
        $image=0;
        $amount=0;

        foreach ($userPreference as $key => $value) {
          switch ($value[2]) { 
              case "Playa":
              $environmentValue=1;
              break;
              case "Montaña":
              $environmentValue=2;
              break;
              case "Ciudad":
              $environmentValue=3;
              break;
              case "Historico":
              $environmentValue=4;
              break;
            } 
            switch ($value[3]) { 
              case "Asfaltado":
              $roadValue=1;
              break;
              case "Lastre":
              $roadValue=2;
              break;
              case "Tierra":
              $roadValue=3;
              break;
            } 
            switch ($value[4]) { 
              case "Caluroso":
              $roadValue=1;
              break;
              case "Humedo":
              $roadValue=2;
              break;
              case "Llovioso":
              $roadValue=3;
              break;
            }      

          }//end foreach

     
          
          $query=mysqli_query ( $this->conn,"select location, camino,tiempo,title,image,amount,iddestination from tbdestination;");   
          $data= mysqli_fetch_all($query);


          if (isset($data)) {

            foreach ($data as $key => $value) { 
              switch ($value[0]) { 
              case "Playa":
              $environmentValueBD=1;
              break;
              case "Montaña":
              $environmentValueBD=2;
              break;
              case "Ciudad":
              $environmentValueBD=3;
              break;
              case "Historico":
              $environmentValueBD=4;
              break;
            } 
            switch ($value[1]) { 
              case "Asfaltado":
              $roadValueBD=1;
              break;
              case "Lastre":
              $roadValueBD=2;
              break;
              case "Tierra":
              $roadValueBD=3;
              break;
            } 
            switch ($value[2]) { 
              case "Caluroso":
              $roadValueBD=1;
              break;
              case "Humedo":
              $roadValueBD=2;
              break;
              case "Llovioso":
              $roadValueBD=3;
              break;
            }

              $iddestination=$value[6];
              $title=$value[3];
             $image=$value[4];
             $amount=$value[5];

             $distanciaActual=sqrt(pow($environmentValue-$environmentValueBD,2)+pow($roadValue-$roadValueBD,2)+
           pow($weatherValue-$weatherValueBD,2));


            $object = new Destiny;
            $object->destinyID = $iddestination;
            $object->destinyName = $title;
            $object->image = $image;
            $object->amount = $amount;
            $object->probabilityValue = $distanciaActual;

           $myArray[] = $object;


            }//end foreach

            usort($myArray,function($first,$second){
    return $first->probabilityValue > $second->probabilityValue;
});

            return $myArray;
            //var_dump($myArray);

          }//end if

           
          }


        //---------End Algoritmos-----


} //end model
?>