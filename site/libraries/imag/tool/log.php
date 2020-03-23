<?php

// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

//import("imag.utilities.dateobject");

/**
 * Logging class
 *
 * This class is designed to build log files based on the
 * W3C specification at: http://www.w3.org/TR/WD-logfile.html
 *
 * @package		Imag.Framework
 * @subpackage	Error
 * @modify by   gary wang (wangbaogang123@hotmail.com)
 * 
 */
class Log extends Object
{
	/**
	 * Log File Pointer
	 * @var	resource
	 */
	private $_file;

	/**
	 * Log File Path
	 * @var	string
	 */
	private $_path;

	/**
	 * Log Format
	 * @var	string
	 */
	//var $_format = "{DATE} {TIME}\t{LEVEL}\t{IP}\t{CONTENT}";
	private $_format = "{DATE} {TIME}\t{IP}\t{CONTENT}";

	/**
	 * Constructor
	 *
	 * @access	protected
	 * @param	string	$path		Log file path
	 * @param	array	$options	Log file options
	 * 
	 */
	public function __construct($path, $options=array())
	{
		// Set default values
		$this->_path = $path;
		if(!empty($options)){
			$this->setOptions($options);
		}
	}

	/**
	 * Set log file options
	 *
	 * @access	public
	 * @param	array	$options	Associative array of options to set
	 * @return	boolean				True if successful
	 * 
	 */
	public function setOptions($options) {

		if (isset ($options['format'])) {
			$this->_format = $options['format'];
		}
		return true;
	}

	public function write($content)
	{
		import('imag.utilities.dateobject');
		// Set some default field values if not already set.
		$date = new DateObject();
		$entry = array();
		$entry['content'] = $content;
		if (!isset ($entry['date'])) {
			$entry['date'] = $date->toFormat("%Y-%m-%d");
		}
		if (!isset ($entry['time'])) {
			$entry['time'] = $date->toFormat("%H:%M:%S");
		}
		if (!isset ($entry['ip'])) {
			$entry['ip'] = $_SERVER['REMOTE_ADDR'];
		}

		// Ensure that the log entry keys are all uppercase
		$entry = array_change_key_case($entry, CASE_UPPER);

		// Find all fields in the format string
		$fields = array ();
		$regex = "/{(.*?)}/i";
		preg_match_all($regex, $this->_format, $fields);

		// Fill in the field data
		$line = $this->_format;
		for ($i = 0; $i < count($fields[0]); $i++)
		{
			$line = str_replace($fields[0][$i], (isset ($entry[$fields[1][$i]])) ? $entry[$fields[1][$i]] : "-", $line);
		}

		// Write the log entry line
		if ($this->_openLog())
		{
			if (!fputs($this->_file, "\n" . $line)) {
				return false;
			}
		} else {
			return false;
		}
		return true;
	}

	/**
	 * Open the log file pointer and create the file if it doesn't exist
	 *
	 * @access 	public
	 * @return 	boolean	True on success
	 * 
	 */
	private function _openLog()
	{
		// Only open if not already opened...
		if (is_resource($this->_file)) {
			return true;
		}

		import('imag.utilities.dateobject');
		$now = new DateObject();
		$date = $now->toMySQL();

		if (!file_exists($this->_path))
		{
			import("imag.filesystem.folder");
			if (!Folder :: create(dirname($this->_path))) {
				return false;
			}
			$header[] = "#<?php die('Direct Access To Log Files Not Permitted'); ?>";
			$header[] = "#Version: 1.0";
			$header[] = "#Date: " . $date;

			// Prepare the fields string
			$fields = str_replace("{", "", $this->_format);
			$fields = str_replace("}", "", $fields);
			$fields = strtolower($fields);
			$header[] = "#Fields: " . $fields;

			import("imag.version");
			// Prepare the software string
			$version = new Version();
			$header[] = "#Software: " . $version->getLongVersion();

			$head = implode("\n", $header);
		} else {
			$head = false;
		}

		if (!$this->_file = fopen($this->_path, "a")) {
			return false;
		}
		if ($head)
		{
			if (!fputs($this->_file, $head)) {
				return false;
			}
		}

		// If we opened the file lets make sure we close it
		register_shutdown_function(array(&$this,'closeLog'));
		return true;
	}

	/**
	 * Close the log file pointer
	 *
	 * @access 	public
	 * @return 	boolean	True on success
	 * 
	 */
	public function closeLog()
	{
		if (is_resource($this->_file)) {
			fclose($this->_file);
		}
		return true;
	}
}
