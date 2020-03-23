<?php
ini_set("display_errors","on");
define('PATH_BASE', dirname(__FILE__));
require_once("site/includes/framework.php");

$router = new Router(array("package"=>"operator.machine","script"=>"wap","task"=>"carlist"));
$router->run();
?>