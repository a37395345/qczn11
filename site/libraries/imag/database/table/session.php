<?php
// No direct access
defined('PATH_BASE') or die;

/**
 * Session table
 *
 * @package		Imag.Framework
 * @subpackage	Table
 */
class TableSession extends Table
{
	/**
	 * Constructor
	 * @param database A database connector object
	 */
	public function __construct($db)
	{
		parent::__construct($db);
	}

	/**
	 * Destroys the pesisting session
	 */
	public function destroy($userId, $clientIds = array())
	{
		$clientIds = implode(',', $clientIds);

		$query = 'DELETE FROM '.$this->_name
			. ' WHERE userid = '. $this->_db->Quote($userId)
			. ' AND client_id IN ('.$clientIds.')'
			;

		if (!$this->_db->query($query)) {
			$this->setError(new Exception($this->_db->getErrorMsg()));
			return false;
		}

		return true;
	}

	/**
	* Purge old sessions
	*
	* @param int	Session age in seconds
	* @return mixed Resource on success, null on fail
	*/
	public function purge($maxLifetime = 1440)
	{
		$past = time() - $maxLifetime;
		$query = 'DELETE FROM '. $this->_name .' WHERE (time < \''. (int) $past .'\')'; // Index on 'VARCHAR'
		return $this->_db->query($query);
	}

	/**
	 * Find out if a user has a one or more active sessions
	 *
	 * @param int $userid The identifier of the user
	 * @return boolean True if a session for this user exists
	 */
	public function exists($userid)
	{
		$query = 'SELECT COUNT(userid) AS total FROM '.$this->_name
			. ' WHERE userid = '. $this->_db->Quote($userid);
		$result = $this->_db-query($query);
		if (!$row = $this->db->fetchrow($result)) {
			$this->setError(new Exception($this->_db->getErrorMsg()));
			return false;
		}

		return (boolean) $result;
	}

}
