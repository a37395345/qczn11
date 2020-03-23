<?php
/**
* @version		$Id:none.php 6961 2007-03-15 16:06:53Z tcp $
* @package		Joomla.Framework
* @subpackage	Session
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
* File session handler for PHP
*
* @package 	Imag.Framework
* @subpackage  Session
* @modify by   gary wang (wangbaogang123@hotmail.com)
* @see http://www.php.net/manual/en/function.session-set-save-handler.php
*/
class SessionStorageNone extends SessionStorage
{
	/**
	* Register the functions of this class with PHP's session handler
	*
	* @access public
	* @param array $options optional parameters
	*/
	public function register()
	{
		//let php handle the session storage
	}
}
