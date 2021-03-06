<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

/**
 * Base class for a View
 * Controller (controllers are where you put all the actual code) Provides basic
 * functionality, such as rendering views (aka displaying templates).
 *
 * @package		Imag.Framework
 * @subpackage	Component
 * @modify by gary wang (wangbaogang123@hotmail.com)
 *
 */
class View extends Object
{
	/**
	 * The name of the view
	 *
	 * @var		array
	 * @access protected
	 */
	protected $_name = null;

	/**
	* The name of the default template source file.
	*
	* @var string
	* @access private
	*/
	private $_template = null;

	/**
	* The directories for resources (templates)
	*
	* @var string
	* @access protected
	*/
	protected $_path = null;

	/**
	 * Constructor
	 *
	 * @access	protected
	 */
	public function __construct($config = array()){

		if (empty( $this->_template )){
			$this->_template = new Template();
		}
		
		//set the view path
		if (array_key_exists('path', $config)) {
            $this->_path = $config['path'];
        }

	}

	/**
	* Assigns variables to the view script via differing strategies.
	*
	* This method is overloaded; you can assign all the properties of
	* an object, an associative array, or a single value by name.
	*
	* You are not allowed to set variables that begin with an underscore;
	* these are either private properties for JView or private variables
	* within the template script itself.
	*
	* <code>
	* $view = new View();
	*
	* // assign directly
	* $view->var1 = 'something';
	* $view->var2 = 'else';
	*
	* // assign by name and value
	* $view->assign('var1', 'something');
	* $view->assign('var2', 'else');
	*
	* // assign by assoc-array
	* $ary = array('var1' => 'something', 'var2' => 'else');
	* $view->assign($obj);
	*
	* // assign by object
	* $obj = new stdClass;
	* $obj->var1 = 'something';
	* $obj->var2 = 'else';
	* $view->assign($obj);
	*
	* </code>
	*
	* @access public
	* @return bool True on success, false on failure.
	*/
	public function assign()
	{
		if($this->_template==null){
			return false;
		}

		// get the arguments; there may be 1 or 2.
		$arg0 = @func_get_arg(0);
		$arg1 = @func_get_arg(1);

		// assign by object
		if (is_object($arg0))
		{
			// assign public properties
			foreach (get_object_vars($arg0) as $key => $value)
			{
				if (substr($key, 0, 1) != '_') {
					$this->_template->assign($key,$value);
				}
			}
			return true;
		}

		// assign by associative array
		if (is_array($arg0))
		{
			foreach ($arg0 as $key => $value)
			{
				if (substr($key, 0, 1) != '_') {
					$this->_template->assign($key,$value);
				}
			}
			return true;
		}

		// assign by string name and mixed value.

		// we use array_key_exists() instead of isset() becuase isset()
		// fails if the value is set to null.
		if (is_string($arg0) && substr($arg0, 0, 1) != '_' && func_num_args() > 1)
		{
			$this->_template->assign($arg0,$arg1);
			return true;
		}

		// $arg0 was not object, array, or string.
		return false;
	}

	/**
	* Sets the layout name to use
	*
	* @access	public
	* @param	string $template The template name.
	* @return	string Previous value
	* 
	*/

	public function setLayoutPath($path)
	{
		$this->_path = $path;

	}

	/**
	**
	* Execute and display a template script.
	*
	* @access public
	* @return null.
	*
	*/
	public function display(){

		$this->_template->display($this->_path);

	}
	
	/**
	**
	*
	* @access public
	* @return html.
	*
	*/
	public function fetch(){

		return $this->_template->fetch($this->_path);

	}
	
}