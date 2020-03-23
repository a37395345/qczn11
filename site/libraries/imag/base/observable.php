<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

/**
 * observable.php
 * @package		Imag.Framework
 * @subpackage	Base
 * @modify by gary wang (wangbaogang123@hotmail.com)
 *
 */
class Observable extends Object
{
	/**
	 * An array of Observer objects to notify
	 *
	 * @access private
	 * @var array
	 */
	protected $_observers = array();

	/**
	 * The state of the observable object
	 *
	 * @access private
	 * @var mixed
	 */
	protected $_state = null;


	/**
	 * Constructor
	 */
	public function __construct() {
		$this->_observers = array();
	}

	/**
	 * Get the state of the JObservable object
	 *
	 * @access public
	 * @return mixed The state of the object
	 * 
	 */
	public function getState() {
		return $this->_state;
	}

	/**
	 * Update each attached observer object and return an array of their return values
	 *
	 * @access public
	 * @return array Array of return values from the observers
	 * 
	 */
	public function notify()
	{
		// Iterate through the _observers array
		foreach ($this->_observers as $observer) {
			$return[] = $observer->update();
		}
		return $return;
	}

	/**
	 * Attach an observer object
	 *
	 * @access public
	 * @param object $observer An observer object to attach
	 * @return void
	 * 
	 */
	public function attach( &$observer)
	{
		// Make sure we haven't already attached this object as an observer
		if (is_object($observer))
		{
			$class = get_class($observer);
			foreach ($this->_observers as $check) {
				if (is_a($check, $class)) {
					return;
				}
			}
			$this->_observers[] =& $observer;
		} else {
			$this->_observers[] =& $observer;
		}
	}

	/**
	 * Detach an observer object
	 *
	 * @access public
	 * @param object $observer An observer object to detach
	 * @return boolean True if the observer object was detached
	 * 
	 */
	public function detach( $observer)
	{
		// Initialize variables
		$retval = false;

		$key = array_search($observer, $this->_observers);

		if ( $key !== false )
		{
			unset($this->_observers[$key]);
			$retval = true;
		}
		return $retval;
	}
}
