<?php

ini_set("display_errors","on");
define('PATH_BASE', dirname(__FILE__));
require_once("../../includes/framework.php");
$router = new Router(array("package"=>"operator.beiyongjin","script"=>"beiyongjin","task"=>"index"));
$router->run();
?>
