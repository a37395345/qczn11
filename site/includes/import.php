<?php
/**
 * import common class 
 * @package		includes
 * @author gary wang (wangbaogang123@hotmail.com)
 * 
 */
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

//Base classes
import( 'imag.base.object');

//Environment classes
import( 'imag.environment.request');
Request::clean();
import( 'imag.environment.response'  );

//Utilities
import( 'imag.utilities.arrayhelper');

//Filters
import( 'imag.filter.filterinput');
import( 'imag.filter.filteroutput');

//router
import( 'imag.application.router');
?>