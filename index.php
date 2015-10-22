<?php
//include("\\src\\core\\classes\\FrontController.php");
require_once("./composer.php");
$autoloader = new autoloader();

$front = new FrontController();
$front->bootstrapt()->handlerRequest();

?>



