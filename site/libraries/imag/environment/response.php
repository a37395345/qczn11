<?php
/**
 * Create the response global object
 */
$GLOBALS['_RESPONSE'] = new stdClass();
$GLOBALS['_RESPONSE']->headers  = array();
 /**
 * Response Class
 * 目前只作为header头和redirect使用.
 * 
 * @package		Imag.Framework
 * @subpackage	environment
 * @modify by   gary wang (wangbaogang123@hotmail.com)
 *
 */
class Response
{
	/**
	 * Set a header
	 *
	 * If $replace is true, replaces any headers already defined with that
	 * $name.
	 *
	 * @access public
	 * @param string 	$name
	 * @param string 	$value
	 * @param boolean 	$replace
	 */
	public static function setHeader($name, $value, $replace = false)
	{
		$name	= (string) $name;
		$value	= (string) $value;

		if ($replace)
		{
			foreach ($GLOBALS['_RESPONSE']->headers as $key => $header) {
				if ($name == $header['name']) {
					unset($GLOBALS['_RESPONSE']->headers[$key]);
				}
			}
		}

		$GLOBALS['_RESPONSE']->headers[] = array(
			'name'	=> $name,
			'value'	=> $value
		);
	}

	/**
	 * Return array of headers;
	 *
	 * @access public
	 * @return array
	 */
	public static function getHeaders() {
		return  $GLOBALS['_RESPONSE']->headers;
	}

	/**
	 * Clear headers
	 *
	 * @access public
	 */
	public static function clearHeaders() {
		$GLOBALS['_RESPONSE']->headers = array();
	}

	/**
	 * Send all headers
	 *
	 * @access public
	 * @return void
	 */
	public static function sendHeaders()
	{
		if (!headers_sent())
		{
			foreach ($GLOBALS['_RESPONSE']->headers as $header)
			{
				if ('status' == strtolower($header['name']))
				{
					// 'status' headers indicate an HTTP status, and need to be handled slightly differently
					header(ucfirst(strtolower($header['name'])) . ': ' . $header['value'], null, (int) $header['value']);
				} else {
					header($header['name'] . ': ' . $header['value']);
				}
			}
		}
	}


	/**
	 * Sends all headers prior to returning the string
	 *
	 * @access public
	 * 
	 */
	public static function noCache()
	{
		
		Response::setHeader( 'Expires', 'Mon, 1 Jan 2001 00:00:00 GMT', true ); 				// Expires in the past
		Response::setHeader( 'Last-Modified', gmdate("D, d M Y H:i:s") . ' GMT', true ); 		// Always modified
		Response::setHeader( 'Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0', false );
		Response::setHeader( 'Pragma', 'no-cache' ); 											// HTTP 1.0
	
		Response::sendHeaders();
		
	}

	/**
	 * Redirects the browser or returns false if no redirect is set.
	 *
	 * @access	public
	 * @return	boolean	False if no redirect exists.
	 * 
	 */
	public static function redirect($url,$msg='')
	{
		
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n</head><body>";
		if(empty($msg)){
			echo "<script>window.location.href='$url';</script>";
		}else{
			echo "<script>alert('$msg');window.location.href='$url';</script>";
		}
		echo "</body></html>";
		exit;

	}
	
	public static function msgbox($url,$msg='')
	{
		echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\n<head>\n";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n</head><body>";
		echo "<div>{$msg}</div>";
		echo "<script type=\"text/javascript\">setTimeout(\"window.location.href ='{$url}';\", 1000);</script>";
		echo "</body></html>";
		exit;
	}
	
	public static function write($msg)
	{
		echo $msg;
		exit();

	}
	
	public static function writeByType($msg,$type,$forward=''){
		if(empty($forward)){
			$forward = Request::getForward("forward");
		}
		if(is_array($msg)){
			$msg = $msg[$type];
		}
		if($type == "json"){
	       	self::write("{result:'$msg'}");
	    }elseif($type == "redirect"){
			self::redirect($forward,$msg);
		}elseif($type == "msgbox"){
			self::msgbox($forward,$msg);
		}else{
			self::write($msg);
		}
	}
}
