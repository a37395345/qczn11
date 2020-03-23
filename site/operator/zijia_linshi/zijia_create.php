<?php
ini_set("display_errors","on");
define('PATH_BASE', dirname(__FILE__));
require_once("../../includes/framework.php");

$router = new Router(array("package"=>"operator.zijia_linshi","script"=>"zijia_linshi","task"=>"zijia_create"));
$router->run();
?>