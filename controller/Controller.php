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
            
            case 'favorite':
                 include VIEW_PATH.'favorite/favorite.php';
                 break;
            case 'estimate':
                 include VIEW_PATH.'estimate/estimate.php';
                 break;
            case 'logout':
                 include VIEW_PATH.'home/home.php';
                  break;

             //user redirection
            case 'indexUser':
                 include VIEW_PATH.'user/userIndex.php';
                 break;
            case 'adminUser':
                 include VIEW_PATH.'user/adminUser.php';
                 break;
            case 'destinationUser':
                 include VIEW_PATH.'destination/destinationUser.php';
                 break;
            case 'interestsUser':
                 include VIEW_PATH.'interests/interestsUser.php';
                 break;
            case 'opinionUser':
                include VIEW_PATH.'opinion/opinionUser.php';
                  break;
            case 'aboutUser':
                 include VIEW_PATH.'about/aboutUser.php';
                  break;
            case 'estimateUser':
                 include VIEW_PATH.'estimate/estimateUser.php';
                  break;

            //form request
            case 'destiny=details':
            //$estilo=$this->model->calcularEstilo($_POST['EC'],$_POST['RO'],$_POST['CA'],$_POST['EA']); 
                include VIEW_PATH.'destination/DestinyDetails.php';
                break;

            case 'login=verify': 
                include VIEW_PATH.'user/userIndex.php';
                break;

            case 'register=newUser': 
                include VIEW_PATH.'user/userIndex.php';
                break;
            case 'interest=search': 
                include VIEW_PATH.'interests/interestResults.php';
                break;


            default:
                 include VIEW_PATH.'home/home.php';
                 break;
        }






    }
}
?>