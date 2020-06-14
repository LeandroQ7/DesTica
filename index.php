<?php
include_once 'core/config.php'; 
include_once(CONTROLLER_PATH);
include_once(HEADER_PATH);
    $controller = new Controller();
    $controller->invoke();
include_once(FOOTER_PATH);
?>