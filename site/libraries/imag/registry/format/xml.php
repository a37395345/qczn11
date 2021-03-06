<?php

// Check to ensure this file is within the rest of the framework

/**
 * XML Format for Registry
 *
 * @package 	Imag.Framework
 * @subpackage  Registry
 * @author      gary wang (wangbaogang123@hotmail.com)
 */
class RegistryFormatXML extends RegistryFormat {

	/**
	 * Converts an XML formatted string into an object
	 *
	 * @access public
	 * @param string  XML Formatted String
	 * @return object Data Object
	 */
	public function stringToObject( $data, $namespace='' ) {
		return true;
	}

	/**
	 * Converts an object into an XML formatted string
	 * 	-	If more than two levels of nested groups are necessary, since INI is not
	 * 		useful, XML or another format should be used.
	 *
	 * @access public
	 * @param object $object Data Source Object
	 * @param array  $param  Parameters used by the formatter
	 * @return string XML Formatted String
	 */
	public function objectToString( $object, $params )
	{
		$depth = 1;
		$retval = "<?xml version=\"1.0\" ?>\n<config>\n";
		foreach (get_object_vars( $object ) as $key=>$item)
		{
			if (is_object($item))
			{
				$retval .= "\t<group name=\"".$key."\">\n";
				$retval .= $this->_buildXMLstringLevel($item, $depth+1);
				$retval .= "\t</group>\n";
			} else {
				$retval .= "\t<entry name=\"".$key."\">".$item."</entry>\n";
			}
		}
		$retval .= '</config>';
		return $retval;
	}

	/**
	 * Method to build a level of the XML string -- called recursively
	 *
	 * @access private
	 * @param object $object Object that represents a node of the xml document
	 * @param int $depth The depth in the XML tree of the $object node
	 * @return string XML string
	 */
	public function _buildXMLstringLevel($object, $depth)
	{
		// Initialize variables
		$retval = '';
		$tab	= '';
		for($i=1;$i <= $depth; $i++) {
			$tab .= "\t";
		}

		foreach (get_object_vars( $object ) as $key=>$item)
		{
			if (is_object($item))
			{
				$retval .= $tab."<group name=\"".$key."\">\n";
				$retval .= $this->_buildXMLstringLevel($item, $depth+1);
				$retval .= $tab."</group>\n";
			} else {
				$retval .= $tab."<entry name=\"".$key."\">".$item."</entry>\n";
			}
		}
		return $retval;
	}
}
