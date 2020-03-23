<?php

// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
* Custom session storage handler for PHP
*
* @abstract
* @package 	Imag.Framework
* @subpackage  Session
* @modify by   gary wang (wangbaogang123@hotmail.com)
* @see http://www.php.net/manual/en/function.session-set-save-handler.php
*/
class SessionStorage extends Object
{
	/**
	* Constructor
	*
	* @access protected
	* @param array $options optional parameters
	*/
	public function __construct( $options = array() )
	{
		$this->register($options);
	}

	/**
	 * Returns a reference to a session storage handler object, only creating it
	 * if it doesn't already exist.
	 *
	 * @access public
	 * @param name 	$name The session store to instantiate
	 * @return database A SessionStorage object
	 * @since 1.5
	 */
	public static function getInstance($name = 'none', $options = array())
	{
		static $instances;

		if (!isset ($instances)) {
			$instances = array ();
		}

		$name = strtolower(FilterInput::clean($name, 'word'));
		if (empty ($instances[$name]))
		{
			$class = 'SessionStorage'.ucfirst($name);
			if(!class_exists($class))
			{
				$path = dirname(__FILE__).DS.'storage'.DS.$name.'.php';
				if (file_exists($path)) {
					require_once($path);
				} else {
					// No call to JError::raiseError here, as it tries to close the non-existing session
					exit('Unable to load session storage class: '.$name);
				}
			}

			$instances[$name] = new $class($options);
		}

		return $instances[$name];
	}

	/**
	* Register the functions of this class with PHP's session handler
	*
	* @access public
	* @param array $options optional parameters
	*/
	public function register( $options = array() )
	{
		// use this object as the session handler
		session_set_save_handler(
			array($this, 'open'),
			array($this, 'close'),
			array($this, 'read'),
			array($this, 'write'),
			array($this, 'destroy'),
			array($this, 'gc')
		);
	}

	/**
	 * Open the SessionHandler backend.
	 *
	 * @abstract
	 * @access public
	 * @param string $save_path     The path to the session object.
	 * @param string $session_name  The name of the session.
	 * @return boolean  True on success, false otherwise.
	 */
	public function open($save_path, $session_name)
	{
		return true;
	}

	/**
	 * Close the SessionHandler backend.
	 *
	 * @abstract
	 * @access public
	 * @return boolean  True on success, false otherwise.
	 */
	public function close()
	{
		return true;
	}

 	/**
 	 * Read the data for a particular session identifier from the
 	 * SessionHandler backend.
 	 *
 	 * @abstract
 	 * @access public
 	 * @param string $id  The session identifier.
 	 * @return string  The session data.
 	 */
	public function read($id)
	{
		return;
	}

	/**
	 * Write session data to the SessionHandler backend.
	 *
	 * @abstract
	 * @access public
	 * @param string $id            The session identifier.
	 * @param string $session_data  The session data.
	 * @return boolean  True on success, false otherwise.
	 */
	public function write($id, $session_data)
	{
		return true;
	}

	/**
	  * Destroy the data for a particular session identifier in the
	  * SessionHandler backend.
	  *
	  * @abstract
	  * @access public
	  * @param string $id  The session identifier.
	  * @return boolean  True on success, false otherwise.
	  */
	public function destroy($id)
	{
		return true;
	}

	/**
	 * Garbage collect stale sessions from the SessionHandler backend.
	 *
	 * @abstract
	 * @access public
	 * @param integer $maxlifetime  The maximum age of a session.
	 * @return boolean  True on success, false otherwise.
	 */
	public function gc($maxlifetime)
	{
		return true;
	}

	/**
	 * Test to see if the SessionHandler is available.
	 *
	 * @abstract
	 * @static
	 * @access public
	 * @return boolean  True on success, false otherwise.
	 */
	public function test()
	{
		return true;
	}
}
