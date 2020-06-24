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
            case 'logout':
                 $_SESSION['session']="User";
                 include VIEW_PATH.'home/home.php';
                break;
            case 'destination':
                 include VIEW_PATH.'destination/destination.php';
                  break;
             case 'interests':
                 include VIEW_PATH.'interests/interests.php';
                 break;
            case 'opinion':
                include VIEW_PATH.'opinion/opinion.php';
                  break;
            case 'about':
                 include VIEW_PATH.'about/about.php';
                  break;
            
            case 'myList':
                 $myList=$this->model->getMyFavorites($_SESSION["session"]); 
                 include VIEW_PATH.'favorite/favorite.php';
                 break;
            case 'estimate':
                 include VIEW_PATH.'estimate/estimate.php';
                 break;
            case 'logout':
                 include VIEW_PATH.'home/home.php';
                  break;

             //user redirection
   

            //form request
            case 'destiny=details':
            //$estilo=$this->model->calcularEstilo($_POST['EC'],$_POST['RO'],$_POST['CA'],$_POST['EA']); 
                $isFavorite=$this->model->checkIfFavorite(10,10); 
                include VIEW_PATH.'destination/DestinyDetails.php';
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
                                  include VIEW_PATH.'home/home.php';
                              }
                
                   
                }
                
               // include VIEW_PATH.'user/userIndex.php';
                break;


            case 'register=newUser': 
                include VIEW_PATH.'user/userIndex.php';
                break;
            case 'interest=search': 
                include VIEW_PATH.'interests/interestResults.php';
                break;
            case 'myList=favorite': 
                include VIEW_PATH.'interests/interestResults.php';
                break;


            default:
                 $topten=$this->model->getTopTen(); 
                 include VIEW_PATH.'home/home.php';
                 break;
        }






    }
}
?>