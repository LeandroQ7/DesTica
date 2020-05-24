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
            case 'destinos':
            include 'view/destinos.php';
            break;
             case 'intereses':
            include 'view/intereses.php';
            break;
            case 'opinion':
            include 'view/opinion.php';
            break;
            case 'acerca':
            include 'view/acerca.php';
            break;

            default:
            include 'view/index.php';
            break;
        }






    }
}
?>