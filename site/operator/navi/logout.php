<?php
define('PATH_BASE', dirname(__FILE__));
require_once("../../includes/framework.php");

$router = new Router(array("package"=>"operator.navi","script"=>"user"));
$router->run();
?>