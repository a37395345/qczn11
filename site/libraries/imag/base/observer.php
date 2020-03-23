<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

 /**
 * Abstract observer class to implement the observer design pattern
 * @package		Imag.Framework
 * @abstract
 * @subpackage	Base
 * @modify by gary wang (wangbaogang123@hotmail.com)
 */
abstract class Observer extends Object
{

	/**
	 * Event object to observe
	 *
	 * @access private
	 * @var object
	 */
	protected $_subject = null;

	/**
	 * Constructor
	 */
	public function __construct(& $subject)
	{
		// Register the observer ($this) so we can be notified
		$subject->attach($this);

		// Set the subject to observe
		$this->_subject = & $subject;
	}

	/**
	 * Method to update the state of observable objects
	 *
	 * @abstract Implement in child classes
	 * @access public
	 * @return mixed
	 */
	abstract public function update(&$args);
}
