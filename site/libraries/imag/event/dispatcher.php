<?php
// Check to ensure this file is within the rest of the framework

import('imag.base.observable');

/**
 * Class to handle dispatching of events.
 *
 * This is the Observable part of the Observer design pattern
 * for the event architecture.
 *
 * @package 	Imag.Framework
 * @subpackage	Event
 * @modify by   gary wang (wangbaogang123@hotmail.com)
 */
class Dispatcher extends Observable
{
	/**
	 * Constructor
	 *
	 * @access	protected
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Returns a reference to the global Event Dispatcher object, only creating it
	 * if it doesn't already exist.
	 *
	 * This method must be invoked as:
	 * 		<pre>  $dispatcher = &Dispatcher::getInstance();</pre>
	 *
	 * @access	public
	 * @return	Dispatcher	The EventDispatcher object.
	 * 
	 */
	public static function getInstance()
	{
		static $instance;

		if (!is_object($instance)) {
			$instance = new Dispatcher();
		}

		return $instance;
	}

	/**
	 * Registers an event handler to the event dispatcher
	 *
	 * @access	public
	 * @param	string	$event		Name of the event to register handler for
	 * @param	string	$handler	Name of the event handler
	 * @return	void
	 * 
	 */
	public function register($event, $handler,$object=null)
	{
		// Are we dealing with a class or function type handler?
		if (function_exists($handler)){
			// Ok, function type event handler... lets attach it.
			$method = array ('event' => $event, 'handler' => $handler);
			$this->attach($method);
		}elseif(!empty($object)){
			if(method_exists($object,$handler)){
				$method = array ('event' => $event, 'handler' => $handler,'object'=>$object);
				$this->attach($method);
			}else{
				throw(new Exception("Not found handler:".$handler." in".get_class($object)));
			}
		}
		/* 本代码删除
		elseif (class_exists($handler))
		{
			 //Ok, class type event handler... lets instantiate and attach it.
			$this->attach(new $handler($this));
		}
		*/
		else
		{
			throw(new Exception("SOME_ERROR_CODE,Dispatcher::register: Event handler not recognized,Handler".$handler));
		}
	}

	/**
	 * Triggers an event by dispatching arguments to all observers that handle
	 * the event and returning their return values.
	 *
	 * @access	public
	 * @param	string	$event			The event name
	 * @param	array	$args			An array of arguments
	 * @param	boolean	$doUnpublished	[DEPRECATED]
	 * @return	array	An array of results from each function call
	 * 
	 */
	public function trigger($event, $args = null, $doUnpublished = false)
	{
		// Initialize variables
		$result = array ();

		/*
		 * If no arguments were passed, we still need to pass an empty array to
		 * the call_user_func_array function.
		 */
		if ($args === null) {
			$args = array ();
		}

		/*
		 * We need to iterate through all of the registered observers and
		 * trigger the event for each observer that handles the event.
		 */
		foreach ($this->_observers as $observer)
		{
			if (is_array($observer))
			{
				/*
				 * Since we have gotten here, we know a little something about
				 * the observer.  It is a function type observer... lets see if
				 * it handles our event.
				 */
				if ($observer['event'] == $event)
				{
					if (function_exists($observer['handler']))
					{
						$result[] = call_user_func_array($observer['handler'], $args);
					}elseif(array_key_exists('object',$observer)){
						$result[] = call_user_func_array(array( $observer['object'], $observer['handler']), $args);
					}else
					{
						/*
						 * Couldn't find the function that the observer specified..
						 * wierd, lets throw an error.
						 */
						throw(new Exception("SOME_ERROR_CODE,Dispatcher::trigger: Event Handler Method does not exist.,Method called".$observer['handler']));
					}
				}
				else
				{
					 // Handler doesn't handle this event, move on to next observer.
					continue;
				}
			}
			/*代码删除
			elseif (is_object($observer))
			{
				*
				 * Since we have gotten here, we know a little something about
				 * the observer.  It is a class type observer... lets see if it
				 * is an object which has an update method.
				 *
				if (method_exists($observer, 'update'))
				{
					*
					 * Ok, now we know that the observer is both not an array
					 * and IS an object.  Lets trigger its update method if it
					 * handles the event and return any results.
					 *
					if (method_exists($observer, $event))
					{
						$args['event'] = $event;
						$result[] = $observer->update($args);
					}
					else
					{
						*
						 * Handler doesn't handle this event, move on to next
						 * observer.
						 *
						continue;
					}
				}
				
				else
				{
					
					 * At this point, we know that the registered observer is
					 * neither a function type observer nor an object type
					 * observer.  PROBLEM, lets throw an error.
					 
					throw(new Exception("SOME_ERROR_CODE,Dispatcher::trigger: Unknown Event Handler,".$observer));
				}
			}
			*/
		}
		return $result;
	}
}
