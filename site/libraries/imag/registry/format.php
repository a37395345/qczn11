<?php

// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
 * Abstract Format for Registry
 *
 * @abstract
 * @package 	Imag.Framework
 * @subpackage  Registry
 * @author      gary wang (wangbaogang123@hotmail.com)
 * 
 */
class RegistryFormat extends Object
{	public static function getInstance($format,$params=array())

	/**
	 * Returns a reference to a Format object, only creating it
	 * if it doesn't already exist.
	 *
	 * @static
	 * @param	string	$format	The format to load
	 * @return	object	Registry format handler
	 * 
	 */
	{
		static $instances;

		if (!isset ($instances)) {
			$instances = array ();
		}

		$format = strtolower(FilterInput::clean($format, 'word'));
		if (empty ($instances[$format]))
		{
			$class = 'RegistryFormat'.$format;
			if(!class_exists($class))
			{
				$path    = dirname(__FILE__).'/format/'.$format.'.php';
				if (file_exists($path)) {
					require_once($path);
				} else {
					//Error::raiseError(500,Text::_('Unable to load format class'));
				}
			}

			$instances[$format] = new $class ();
		}
		return $instances[$format];
	}

	/**
	 * Converts an XML formatted string into an object
	 *
	 * @abstract
	 * @access	public
	 * @param	string	$data	Formatted string
	 * @return	object	Data Object
	 * 
	 */
	public function stringToObject( $data, $namespace='' ) {
		return true;
	}

	/**
	 * Converts an object into a formatted string
	 *
	 * @abstract
	 * @access	public
	 * @param	object	$object	Data Source Object
	 * @return	string	Formatted string
	 * 
	 */
	public function objectToString( $object ) {

	}
}