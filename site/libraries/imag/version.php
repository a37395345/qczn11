<?php
/**
 * Version information
 *
 * @package	Imag.Framework
 * @since	1.0
 * @modify by gary wang MSN:wangbaogang123@hotmail.com
 */
 
class Version
{
	/** @var string Product */
	private $PRODUCT 	= 'IMAG cms!';
	/** @var int Main Release Level */
	private $RELEASE 	= '0.99';
	/** @var string Development Status */
	private $DEV_STATUS = 'Production/Stable';
	/** @var int Sub Release Level */
	private $DEV_LEVEL 	= '10';
	/** @var int build Number */
	private $BUILD	= '';
	/** @var string Codename */
	private $CODENAME 	= 'Wohmamni';
	/** @var string Date */
	private $RELDATE 	= '27-March-2009';
	/** @var string Time */
	private $RELTIME 	= '23:00';
	/** @var string Timezone */
	private $RELTZ 	= 'GMT';
	/** @var string Copyright Text */
	private $COPYRIGHT 	= 'Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.';
	/** @var string URL */
	private $URL 	= '<a href="http://www.e75.cn/imagcms">ImagCms</a> is Free Software released under the GNU General Public License.';

	/**
	 *
	 *
	 * @return string Long format version
	 */
	public function getLongVersion()
	{
		return $this->PRODUCT .' '. $this->RELEASE .'.'. $this->DEV_LEVEL .' '
			. $this->DEV_STATUS
			.' [ '.$this->CODENAME .' ] '. $this->RELDATE .' '
			. $this->RELTIME .' '. $this->RELTZ;
	}

	/**
	 *
	 *
	 * @return string Short version format
	 */
	public function getShortVersion() {
		return $this->RELEASE .'.'. $this->DEV_LEVEL;
	}

	/**
	 *
	 *
	 * @return string Version suffix for help files
	 */
	public function getHelpVersion()
	{
		if ($this->RELEASE > '1.0') {
			return '.' . str_replace( '.', '', $this->RELEASE );
		} else {
			return '';
		}
	}

	/**
	 * Compares two "A PHP standardized" version number against the current Joomla! version
	 *
	 * @return boolean
	 * @see http://www.php.net/version_compare
	 */
	public function isCompatible ( $minimum ) {
		return (version_compare( Version, $minimum, 'eq' ) == 1);
	}
}
