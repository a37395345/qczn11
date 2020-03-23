<?php
//header("Content-type: text/html; charset=utf-8");
//header("Content-type: application/json");
//echo json_encode(array("result"=>0));

$memb=new Memcached();
$memcahce->connect('192.168.1.9',　12121);
$memcache->set('Key','dddd');
$memcache->get('Key');
?>