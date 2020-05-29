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
                include 'view/register.php';
               break;
            case 'login':
                 include 'view/login.php';
                break;
            case 'destination':
                 include 'view/destination.php';
                  break;
             case 'interests':
                 include 'view/interests.php';
                 break;
            case 'opinion':
                include 'view/opinion.php';
                  break;
            case 'about':
                 include 'view/about.php';
                  break;
            
            case 'favorite':
                 include 'view/favorite.php';
                 break;
            case 'estimate':
                 include 'view/estimate.php';
                 break;
            case 'logout':
                 include 'view/index.php';
                  break;

             //user redirection
            case 'indexUser':
                 include 'view/userIndex.php';
                 break;
            case 'adminUser':
                 include 'view/adminUser.php';
                 break;
            case 'destinationUser':
                 include 'view/destinationUser.php';
                 break;
            case 'interestsUser':
                 include 'view/interestsUser.php';
                 break;
            case 'opinionUser':
                include 'view/opinionUser.php';
                  break;
            case 'aboutUser':
                 include 'view/aboutUser.php';
                  break;
            case 'estimateUser':
                 include 'view/estimateUser.php';
                  break;

            //form request

            case 'destiny=details':
            //$estilo=$this->model->calcularEstilo($_POST['EC'],$_POST['RO'],$_POST['CA'],$_POST['EA']); 
                include 'view/DestinyDetails.php';
                break;

            case 'login=verify': 
                include 'view/userIndex.php';
                break;

            case 'register=newUser': 
                include 'view/userIndex.php';
                break;
            case 'interest=search': 
                include 'view/interestResults.php';
                break;


            default:
                 include 'view/index.php';
                 break;
        }






    }
}
?>