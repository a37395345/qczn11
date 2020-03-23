<?php
/**
 * upload.php
 *
 * Copyright 2013, Moxiecode Systems AB
 * Released under GPL License.
 *
 * License: http://www.plupload.com/license
 * Contributing: http://www.plupload.com/contributing
 */
#!! IMPORTANT:
#!! this file is just an example, it doesn't incorporate any security checks and
#!! is not recommended to be used in production environment as it is. Be sure to
#!! revise it and customize to your needs.


// Make sure file is not cached (as it happens for example on iOS devices)
header("content-type:text/html;charset=utf-8");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
date_default_timezone_set("Asia/Shanghai");

// Support CORS
// header("Access-Control-Allow-Origin: *");
// other CORS headers if any...
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit; // finish preflight CORS requests here
}


if ( !empty($_REQUEST[ 'debug' ]) ) {
    $random = rand(0, intval($_REQUEST[ 'debug' ]) );
    if ( $random === 0 ) {
        header("HTTP/1.0 500 Internal Server Error");
        exit;
    }
}

// header("HTTP/1.0 500 Internal Server Error");
// exit;
// 5 minutes execution time
@set_time_limit(5 * 60);

// Uncomment this one to fake upload time
usleep(5000);

// Settings
// $targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
$recid=0;
$zid=$_REQUEST["car"];
$cid=$_REQUEST["contractid"];
$bid=$_REQUEST["baoxiaoid"];
$did=$_REQUEST["consultid"];
$oid=$_REQUEST["otherid"];
$eid=$_REQUEST["wenti"];
$fid=$_REQUEST["paiche"];
if (!empty($cid)) $recid=$cid;
if (!empty($bid)) $recid=$bid;
if (!empty($did)) $recid=$did;
if (!empty($oid)) $recid=$oid;
if (!empty($eid)) $recid=$eid;
//if (!empty($fid)) $recid=$fid;
if (!empty($zid)) $recid=$zid;

$targetDir = '../../thumb/upload_tmp';
$uploadDir = '../../thumb/upload/'.$recid;
if(!empty($fid)){
    $uploadDir = '../../thumb/upload_b';
}
if(!empty($zid)){
    $uploadDir = '../../thumb/'.$recid;
}
$cleanupTargetDir = true; // Remove old files
$maxFileAge = 5 * 3600; // Temp file age in seconds


// 创建文件目录
if (!file_exists($targetDir)) {
    @mkdir($targetDir);
}

// 创建文件目录
if (!file_exists($uploadDir)) {
    @mkdir($uploadDir);
}

//获取文件名
if (isset($_REQUEST["name"])) {
    $fileName = $_REQUEST["name"];
} elseif (!empty($_FILES)) {
    $fileName = $_FILES["file"]["name"];
} else {
    $fileName = uniqid("file_");
}

$md5File = @file('md5list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$md5File = $md5File ? $md5File : array();

if (isset($_REQUEST["md5"]) && array_search($_REQUEST["md5"], $md5File ) !== FALSE ) {
    die('{"jsonrpc" : "2.0", "result" : null, "id" : "id", "exist": 1}');
}

$filePath = $targetDir . DIRECTORY_SEPARATOR . iconv("UTF-8", "GBK", $fileName);
$uploadPath = $uploadDir . DIRECTORY_SEPARATOR . iconv("UTF-8", "GBK", $fileName);

// Chunking might be enabled
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 1;

// Remove old temp files
if ($cleanupTargetDir) {
    if (!is_dir($targetDir) || !$dir = opendir($targetDir)) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
    }

    while (($file = readdir($dir)) !== false) {
        $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

        // If temp file is current file proceed to the next
        if ($tmpfilePath == "{$filePath}_{$chunk}.part" || $tmpfilePath == "{$filePath}_{$chunk}.parttmp") {
            continue;
        }

        // Remove temp file if it is older than the max age and is not the current file
        if (preg_match('/\.(part|parttmp)$/', $file) && (@filemtime($tmpfilePath) < time() - $maxFileAge)) {
            @unlink($tmpfilePath);
        }
    }
    closedir($dir);
}


// Open temp file
if (!$out = @fopen("{$filePath}_{$chunk}.parttmp", "wb")) {
    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
}

if (!empty($_FILES)) {
    if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
    }

    // Read binary input stream and append it to temp file
    if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
    }
} else {
    if (!$in = @fopen("php://input", "rb")) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
    }
}

while ($buff = fread($in, 4096)) {
    fwrite($out, $buff);
}

@fclose($out);
@fclose($in);

rename("{$filePath}_{$chunk}.parttmp", "{$filePath}_{$chunk}.part");

$index = 0;
$done = true;
for( $index = 0; $index < $chunks; $index++ ) {
    if ( !file_exists("{$filePath}_{$index}.part") ) {
        $done = false;
        break;
    }
}
if ( $done ) {
    if (!$out = @fopen($uploadPath, "wb")) {
        die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
    }

    if ( flock($out, LOCK_EX) ) {
        for( $index = 0; $index < $chunks; $index++ ) {
            if (!$in = @fopen("{$filePath}_{$index}.part", "rb")) {
                break;
            }

            while ($buff = fread($in, 4096)) {
                fwrite($out, $buff);
            }

            @fclose($in);
            @unlink("{$filePath}_{$index}.part");
        }

        flock($out, LOCK_UN);
    }
    @fclose($out);
}
if (!empty($cid)){
	$sql="Insert Into sales_contract_images(contract_id,images) Values({$cid},'upload/{$cid}/{$fileName}')";
}
if (!empty($bid)){
	$sql="Insert Into baoxiao_images(baoxiao_id,images,uploadtime) Values({$bid},'upload/{$bid}/{$fileName}','".date("Y-m-d H:i:s")."')";
}
if (!empty($did)){
	$sql="Insert Into consulting_images(consult_id,images) Values({$did},'upload/{$did}/{$fileName}')";
}
if (!empty($oid)){
	$sql="Insert Into finance_images(images_type,finance_id,images,uploadtime) Values('other',{$oid},'upload/{$oid}/{$fileName}','".date("Y-m-d H:i:s")."')";
}
if (!empty($eid)){
    $sql="Insert Into wenti_image(images_type,wenti_id,images,addtime) Values('other',{$eid},'upload/{$eid}/{$fileName}','".date("Y-m-d H:i:s")."')";
}

if (!empty($fid)){
    $sql="Insert Into paiche_images(name,paiche_id) Values('upload_b/{$fileName}','{$fid}')";
}
if (!empty($zid)){
    $sql="Insert Into car_images(images,car_id) Values('{$zid}/{$fileName}','{$zid}')";
}
$con = mysql_connect("localhost","aaa","root");
mysql_query("SET NAMES 'utf8'");

mysql_select_db("qczn", $con); 
mysql_query($sql);
mysql_close($con);

// Return Success JSON-RPC response
die('{"jsonrpc" : "2.0", "result" : null, "id" : "ID"}');