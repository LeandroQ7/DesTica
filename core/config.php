<?php
/*RUTA DIRECTORIO RAÍZ*/
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/DesTica/');

/*RUTAS ARQUITECTURA*/
define("MODEL_PATH", ROOT_PATH."model/");
define("VIEW_PATH", ROOT_PATH."view/");
define("CONTROLLER_PATH", ROOT_PATH."controller/controller.php");
define("DOMAIN_PATH", MODEL_PATH."domain/");
define("CORE_PATH", ROOT_PATH."core/");
define("BASEHTML_PATH", "structure/");

/*HEADER Y FOOTER */
define("HEADER_PATH", VIEW_PATH.BASEHTML_PATH."header.php");
define("FOOTER_PATH", VIEW_PATH.BASEHTML_PATH."footer.php");

/* PUBLIC:  JS- CSS- IMG*/
define("CSS_PATH", ROOT_PATH."public/css/");
define("JS_PATH", ROOT_PATH."public/js/");
define("IMAGE_PATH", ROOT_PATH."public/img/");

/*BASE DE DATOS*/         
define("DB_TYPE", "mysql");
define("DB_HOST", "163.178.107.10");
define("DB_USER", "laboratorios");
define("DB_PASS", "UCRSA.118");
define("DB_NAME", "dbdestica");
define("TBL_NAME",  "tbname");
define("TBL_CALIFICACION",  "tbcalification");
define("TBL_USER",  "tbuser");

/*VARIABLES GLOBALES*/
define("ADMIN_NAME", "admin");
define("GUEST_NAME", "guest");

define("USER_TIMEOUT", 2);
define("GUEST_TIMEOUT", 5);
?>