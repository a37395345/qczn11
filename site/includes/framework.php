<?php
/**
* @version		0.99 (2010-10-27 V3)
* @package		includes
* @copyright	Copyright (C) 2009 - ? IMAG Network Team. All rights reserved.
* @author		gary wang (msn:wangbaogang123@hotmail.com,qq:465474550)
* 
*/

// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );
define('HOMEDIR', 'D:\WWW\qczn');

define( 'DS', DIRECTORY_SEPARATOR );

/* time local */
date_default_timezone_set('Asia/Chongqing');

/* include path */
$paths = array();
if(defined('BASEDIR')){
	array_push($paths,BASEDIR.DIRECTORY_SEPARATOR.'includes');
	array_push($paths,BASEDIR.DIRECTORY_SEPARATOR.'libraries');
	array_push($paths,BASEDIR.DIRECTORY_SEPARATOR.'classes');
}
array_push($paths,".");
array_push($paths,dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'libraries');
array_push($paths,dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'classes');
array_push($paths,dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'includes');

set_include_path(implode(PATH_SEPARATOR, $paths));
unset($paths);

/*
 * system checks
 */

@set_magic_quotes_runtime( 0 );
@ini_set('zend.ze1_compatibility_mode', '0');

/**
 * Load the loader class
 */
require_once(""."loader.php");

// System configuration
require_once(dirname(__FILE__). DIRECTORY_SEPARATOR . "config.php");

/* debug */
if(Config::$debug){
	ini_set( 'display_errors', "on" );
}
define( 'DEBUG', Config::$sqldebug );
define( 'DBUTF8',Config::$dbutf8,true);

require_once(dirname(__FILE__). DIRECTORY_SEPARATOR ."factory.php");
require_once(dirname(__FILE__). DIRECTORY_SEPARATOR ."import.php");
?>