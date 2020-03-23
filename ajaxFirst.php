<?php
ini_set("display_errors","on");
define('PATH_BASE', dirname(__FILE__));
require_once("site/includes/framework.php");

$task=Request::getVar('act','post');

$router = new Router(array("package"=>"operator.machine","script"=>"machine","task"=>$task));
$router->run();
?>