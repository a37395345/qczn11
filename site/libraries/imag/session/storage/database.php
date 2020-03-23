<?php
defined('PATH_BASE') or die();

// Check to ensure this file is within the rest of the framework

/**
* Database session storage handler for PHP
*
 * @package 	Imag.Framework
 * @subpackage  Session
 * @modify by   gary wang (wangbaogang123@hotmail.com)
* @see http://www.php.net/manual/en/function.session-set-save-handler.php
* 使用本类必须先建立和映射session表
*/
class SessionStorageDatabase extends SessionStorage
{
	private $_data = null;

	/**
	 * Open the SessionHandler backend.
	 *
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
 	 * @access public
 	 * @param string $id  The session identifier.
 	 * @return string  The session data.
 	 */
	public function read($id)
	{
		$db = Model::getDB();
		if(!$db->connected()) {
			return false;
		}

		$session = Config::getTable('session');
		$session->load($id);
		return (string)$session->data;
	}

	/**
	 * Write session data to the SessionHandler backend.
	 *
	 * @access public
	 * @param string $id            The session identifier.
	 * @param string $session_data  The session data.
	 * @return boolean  True on success, false otherwise.
	 */
	public function write($id, $session_data)
	{
		$db = Model::getDB();
		if(!$db->connected()) {
			return false;
		}

		$session = Config::getTable('session');
		$session->load($id);
		$session->data = $session_data;
		$session->store();

		return true;
	}

	/**
	  * Destroy the data for a particular session identifier in the
	  * SessionHandler backend.
	  *
	  * @access public
	  * @param string $id  The session identifier.
	  * @return boolean  True on success, false otherwise.
	  */
	public function destroy($id)
	{
		$db = Model::getDB();
		if(!$db->connected()) {
			return false;
		}

		$session = Config::getTable('session');
		$session->delete($id);
		return true;
	}

	/**
	 * Garbage collect stale sessions from the SessionHandler backend.
	 *
	 * @access public
	 * @param integer $maxlifetime  The maximum age of a session.
	 * @return boolean  True on success, false otherwise.
	 */
	public function gc($maxlifetime)
	{
		$db = Model::getDB();
		if(!$db->connected()) {
			return false;
		}

		$session = Config::getTable('session');
		$session->purge($maxlifetime);
		return true;
	}
}
