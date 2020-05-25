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


        $pagina=$_SERVER['QUERY_STRING'];

        switch ($pagina) {
            case 'destinations':
            include 'view/destinations.php';
            break;
             case 'interests':
            include 'view/interests.php';
            break;
            case 'opinion':
            include 'view/opinion.php';
            break;
            case 'acerca':
            include 'view/about.php';
            break;

            default:
            include 'view/index.php';
            break;
        }






    }
}
?>