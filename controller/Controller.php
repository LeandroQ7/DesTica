<?php
include_once("model/Model.php");
class Controller {
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function invoke()
    {
        $page=$_SERVER['QUERY_STRING'];
        switch ($page) {
            case 'register':
            include VIEW_PATH.'signin/register.php';
            break;
            case 'login':
            include VIEW_PATH.'signin/login.php';
            break;
            case 'profile':
            $profileData=$this->model->getProfile($_SESSION["session"]);
            $_SESSION["userInfo"]=$profileData;
            include VIEW_PATH.'signin/profile.php';
            break;
            case 'logout':
            $_SESSION['session']="User";
            include VIEW_PATH.'home/home.php';
            break;
            case 'destination':
            $allDestinations=$this->model->getAllDestinations(); 
            include VIEW_PATH.'destination/destination.php';
            break;
            case 'interests':
            $_SESSION['allTitles']=$this->model->getAllTitles(); 

            include VIEW_PATH.'interests/interests.php';
            break;
            case 'opinion':
            include VIEW_PATH.'opinion/opinion.php';
            break;
            case 'about':
            $valoration=$this->model->getValoration(); 
            include VIEW_PATH.'about/about.php';
            break;
            
            case 'myList':
            $myList=$this->model->getMyFavorites($_SESSION["session"]); 
            include VIEW_PATH.'favorite/favorite.php';
            break;
            case 'estimate':
            include VIEW_PATH.'estimate/estimate.php';
            break;            

             //user redirection
            
            //form request
            case 'destiny=details':
            if($_SESSION['session']!="User"){
                $isFavorite=$this->model->checkIfFavorite($_SESSION['session'],$_POST['ID']); 
            }        
            $destinyDetails=$this->model->getDestiny($_POST['ID']);
            include VIEW_PATH.'destination/DestinyDetails.php';
            break;
            case 'profile=updateData':       
            $this->model->setProfile($_SESSION['session'],$_POST['inputName'],$_POST['inputEmail'],$_POST['environment'],$_POST['road_type'],$_POST['weather']);
            $profileData=$_SESSION["userInfo"];

            $message = "Datos Actualizados";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include VIEW_PATH.'home/home.php';
            break;

            case 'login=verify': 
            $user=$this->model->verifyUser($_POST['inputEmail'],$_POST['inputPassword']); 
            if(isset($user)){
                
              if (empty($user)) {
                $user="credentialError";
                include VIEW_PATH.'signin/login.php';
            }else{
                foreach ($user as $key => $value) {
                    $_SESSION['session']=$value[2];
                }   
                $topten=$this->model->getTopTen(); 
                include VIEW_PATH.'home/home.php';
            }  
        }
               // include VIEW_PATH.'user/userIndex.php';
        break;


        case 'register=newUser': 
        include VIEW_PATH.'user/userIndex.php';
        break;
        case 'interest=search': 
        $bayes=$this->model->bayes($_POST['environment'],$_POST['road_type'], $_POST['weather'], $_POST['people_range'], $_SESSION['allTitles']);
        //$interestResults=$this->model->getAllDestinations(); 
        include VIEW_PATH.'interests/interestResults.php';
        break;
        case 'opinion=setOpinion':
        if (isset($_POST['radio'])) {$radio = strip_tags(trim($_POST['radio'])); }
        if (isset($_POST['comentario']) && is_string($_POST['comentario'])) {
            $comentario = strip_tags(trim($_POST['comentario'])); }
            
            if($radio!=null and $comentario!=null){ 
                $msg="Gracias por su opinión !";         
                $valor=$this->model->setOpinion($radio,$comentario); 
            }else{
                $msg="Por favor llena bien los campos.";
            }
            include VIEW_PATH.'opinion/opinion.php';
            break; 

            case 'estimate=getEstimate': 
            if (isset($_POST['personas'])) {$personas = strip_tags(trim($_POST['personas'])); }
            if (isset($_POST['dias'])) {$dias = strip_tags(trim($_POST['dias'])); }
            if (isset($_POST['precio'])) {$precio = strip_tags(trim($_POST['precio'])); }
            if($personas!=null and $dias!=null and $precio!=null){ 
                $msg="Hemos realizado tu presupuesto !";         
                $valor=$this->model->getEstimate($personas,$dias,$precio); 
            }else{
                $msg="Por favor llena bien los campos.";
            }

            include VIEW_PATH.'estimate/estimate.php';
            break; 

            default:
            $topten=$this->model->getTopTen(); 
             $topten2=$this->model->getTopTen2(); 
            if (isset($_SESSION['session'])){

            }else{
                $_SESSION['session']="User";
            }
            
            include VIEW_PATH.'home/home.php';
            break;
        }






    }
}
?>