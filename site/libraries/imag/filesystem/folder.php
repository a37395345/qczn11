<?php

// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

import('imag.filesystem.path');

/**
 * A Folder handling class
 *
 * @static
 * @package 	Imag.Framework
 * @subpackage	FileSystem
 * @modify by   gary wang (wangbaogang123@hotmail.com)
 */
class Folder
{
	public static $ftpconfig;
	
	/**
	 * Copy a folder.
	 *
	 * @param	string	The path to the source folder.
	 * @param	string	The path to the destination folder.
	 * @param	string	An optional base path to prefix to the file names.
	 * @param	boolean	Optionally force folder/file overwrites.
	 * @return	mixed	Exception object on failure or boolean True on success.
	 * 
	 */
	public static function copy($src, $dest, $path = '', $force = false)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);

		if ($path) {
			$src = Path::clean($path . "/" . $src);
			$dest = Path::clean($path . "/" . $dest);
		}

		// Eliminate trailing directory separators, if any
		$src = rtrim($src, "/");
		$dest = rtrim($dest, "/");

		if (!Folder::exists($src)) {
			throw(new Exception('Cannot find source folder!'));
			return null;
		}
		if (Folder::exists($dest,false) && !$force) {
			throw(new Exception('Folder already exists!'));
			return null;
		}

		// Make sure the destination exists
		if (! Folder::create($dest)) {
			throw(new Exception('Unable to create target folder'));
			return null;
		}

		if ($ftpOptions['ftp_enable'])
		{
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			if (!($dh = @opendir($src))) {
				throw(new Exception('Unable to open source folder'));
				return null;
			}
			// Walk through the directory copying files and recursing into folders.
			while (($file = readdir($dh)) !== false) {
				$sfid = $src . "/" . $file;
				$dfid = $dest . "/" . $file;
				switch (filetype($sfid)) {
					case 'dir':
						if ($file != '.' && $file != '..') {
							$ret = Folder::copy($sfid, $dfid, null, $force);
							if ($ret !== true) {
								return $ret;
							}
						}
						break;

					case 'file':
						// Translate path for the FTP account
						$dfid = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $dfid), '/');
						if (! $ftp->store($sfid, $dfid)) {
							throw(new Exception('Copy failed'));
							return null;
						}
						break;
				}
			}
		} else {
			if (!($dh = @opendir($src))) {
				throw(new Exception('Unable to open source folder'));
				return null;
			}
			// Walk through the directory copying files and recursing into folders.
			while (($file = readdir($dh)) !== false) {
				$sfid = $src . "/" . $file;
				$dfid = $dest . "/" . $file;
				switch (filetype($sfid)) {
					case 'dir':
						if ($file != '.' && $file != '..') {
							$ret = Folder::copy($sfid, $dfid, null, $force);
							if ($ret !== true) {
								return $ret;
							}
						}
						break;

					case 'file':
						if (!@copy($sfid, $dfid)) {
							throw(new Exception('Copy failed'));
							return null;
						}
						break;
				}
			}
		}
		return true;
	}

	/**
	 * Create a folder -- and all necessary parent folders.
	 *
	 * @param string A path to create from the base path.
	 * @param int Directory permissions to set for folders created.
	 * @return boolean True if successful.
	 * 
	 */
	public static function create($path = '', $mode = 0755)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);
		
		static $nested = 0;

		// Check to make sure the path valid and clean
		$path = Path::clean($path);

		// Check if parent dir exists
		$parent = dirname($path);
		if (!Folder::exists($parent,false)) {
			// Prevent infinite loops!
			$nested++;
			if (($nested > 20) || ($parent == $path)) {
				
				throw(new Exception('SOME_ERROR_CODE Folder::create: Infinite loop detected'));
				$nested--;
				return false;
			}

			// Create the parent directory
			if (Folder::create($parent, $mode) !== true) {
				// Folder::create throws an error
				$nested--;
				return false;
			}

			// OK, parent directory has been created
			$nested--;
		}

		// Check if dir already exists
		if (Folder::exists($path,false)) {
			return true;
		}

		// Check for safe mode
		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			// Translate path to FTP path
			$path = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $path), '/');
			$ret = $ftp->mkdir($path);
			$ftp->chmod($path, $mode);
		} else {
			// We need to get and explode the open_basedir paths
			$obd = ini_get('open_basedir');

			// If open_basedir is set we need to get the open_basedir that the path is in
			if ($obd != null)
			{
				if (PATH_ISWIN) {
					$obdSeparator = ";";
				} else {
					$obdSeparator = ":";
				}
				// Create the array of open_basedir paths
				$obdArray = explode($obdSeparator, $obd);
				$inBaseDir = false;
				// Iterate through open_basedir paths looking for a match
				foreach ($obdArray as $test) {
					$test = Path::clean($test);
					if (strpos($path, $test) === 0) {
						$obdpath = $test;
						$inBaseDir = true;
						break;
					}
				}
				if ($inBaseDir == false) {
					// Return false for Folder::create because the path to be created is not in open_basedir
					throw(new Exception('SOME_ERROR_CODE Folder::create: Path not in open_basedir paths'));
					return false;
				}
			}

			// First set umask
			$origmask = @umask(0);

			// Create the path
			if (!$ret = @mkdir($path, $mode)) {
				@umask($origmask);
				throw(new Exception('SOME_ERROR_CODE Folder::create: Could not create directory Path:'. $path));
				return false;
			}

			// Reset umask
			@umask($origmask);
		}
		return $ret;
	}

	/**
	 * Delete a folder.
	 *
	 * @param string The path to the folder to delete.
	 * @return boolean True on success.
	 * 
	 */
	public static function delete($path)
	{
		// Sanity check
		if (empty($path)) {
			// Bad programmer! Bad Bad programmer!
			throw(new Exception('Folder::delete: Attempt to delete base directory'));
			return false;
		}
		
		

		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);
		
		if (!$ftpOptions['ftp_enable']) {
			
			if(!Folder::exists($path)){
				return true;
			}
			
			// Check to make sure the path valid and clean
			$path = Path::clean($path);
		
			// Is this really a folder?
			if (!is_dir($path)) {
				throw(new Exception('Folder::delete: Path is not a folder Path:'. $path));
				return false;
			}
	
			// Remove all the files in folder if they exist
			$files = Folder::files($path, '.', false, true, array());
			if (!empty($files)) {
				import('imag.filesystem.fusefile');
				if (FuseFile::delete($files) !== true) {
					throw(new Exception('FuseFile::delete: error! File:'.$files));
					return false;
				}
			}
	
			// Remove sub-folders of folder
			$folders = Folder::folders($path, '.', false, true, array());
			foreach ($folders as $folder) {
				if (is_link($folder)) {
					// Don't descend into linked directories, just delete the link.
					import('imag.filesystem.fusefile');
					if (FuseFile::delete($folder) !== true) {
						// File::delete throws an error
						throw(new Exception('ImagFile::delete: error! Folder:'.$folder));
						return false;
					}
				} elseif (Folder::delete($folder) !== true) {
					// Folder::delete throws an error
					throw(new Exception('Folder::delete: error! Folder:'.$folder));
					return false;
				}
			}
			// In case of restricted permissions we zap it one way or the other
			// as long as the owner is either the webserver or the ftp
			if (@rmdir($path)) {
				$ret = true;
			}
		}

		if ($ftpOptions['ftp_enable']) {
			
			if(!Folder::exists($path,false)){
				return true;
			}
			
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);
		
			// Translate path and delete
			$path = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $path), '/');

			// FTP connector throws an error
			$ret = $ftp->rmdir($path);
		} 
		//else {
			//throw(new Exception('SOME_ERROR_CODE: Folder::delete: Could not delete folder Path:'. $path));
			//$ret = false;
		//}
		return $ret;
	}

	/**
	 * Moves a folder.
	 *
	 * @param string The path to the source folder.
	 * @param string The path to the destination folder.
	 * @param string An optional base path to prefix to the file names.
	 * @return mixed Error message on false or boolean true on success.
	 * 
	 */
	public static function move($src, $dest, $path = '')
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);

		if ($path) {
			$src = Path::clean($path . DS . $src);
			$dest = Path::clean($path . DS . $dest);
		}

		if (!Folder::exists($src,false) /*&& !is_writable($src)*/) {
			throw(new Exception('Cannot find source folder'));
			return 'Cannot find source folder';
		}
		if (Folder::exists($dest,false)) {
			throw(new Exception('Folder already exists'));
			return "Folder already exists";
		}

		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			//Translate path for the FTP account
			$src = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $src), '/');
			$dest = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $dest), '/');

			// Use FTP rename to simulate move
			if (!$ftp->rename($src, $dest)) {
				throw(new Exception('Rename failed'));
				return 'Rename failed';
			}
			$ret = true;
		} else {
			if (!@rename($src, $dest)) {
				throw(new Exception('Rename failed'));
				return 'Rename failed';
			}
			$ret = true;
		}
		return $ret;
	}

	/**
	 * Wrapper for the standard file_exists function
	 *
	 * @param string Folder name relative to installation dir
	 * @return boolean True if path is a folder
	 * 
	 */
	public static function exists($path,$local=true)
	{
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);
		if(!$local&&$ftpOptions['ftp_enable']){
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance($ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']);
			return $ftp->exists($path);
		}
		return is_dir(Path::clean($path));
	}

	/**
	 * Utility function to read the files in a folder. Only for local. 
	 *
	 * @param	string	The path of the folder to read.
	 * @param	string	A filter for file names.
	 * @param	mixed	True to recursively search into sub-folders, or an
	 * integer to specify the maximum depth.
	 * @param	boolean	True to return the full path to the file.
	 * @param	array	Array with names of files which should not be shown in
	 * the result.
	 * @return	array	Files in the given folder.
	 * 
	 */
	public static function files($path, $filter = '.', $recurse = false, $fullpath = false, $exclude = array('.svn', 'CVS'))
	{
		// Initialize variables
		$arr = array();

		// Check to make sure the path valid and clean
		$path = Path::clean($path);

		// Is the path a folder?
		if (!is_dir($path)) {
			throw(new Exception('Folder::files:Path is not a folder Path:'. $path));
			return false;
		}

		// read the source directory
		$handle = opendir($path);
		while (($file = readdir($handle)) !== false)
		{
			if (($file != '.') && ($file != '..') && (!in_array($file, $exclude))) {
				$dir = $path . "/" . $file;
				$isDir = is_dir($dir);
				if ($isDir) {
					if ($recurse) {
						if (is_integer($recurse)) {
							$arr2 = Folder::files($dir, $filter, $recurse - 1, $fullpath);
						} else {
							$arr2 = Folder::files($dir, $filter, $recurse, $fullpath);
						}
						
						$arr = array_merge($arr, $arr2);
					}
				} else {
					if (preg_match("/$filter/", $file)) {
						if ($fullpath) {
							$arr[] = $path . "/" . $file;
						} else {
							$arr[] = $file;
						}
					}
				}
			}
		}
		closedir($handle);

		asort($arr);
		return $arr;
	}

	/**
	 * Utility function to read the folders in a folder. Only for local. 
	 *
	 * @param	string	The path of the folder to read.
	 * @param	string	A filter for folder names.
	 * @param	mixed	True to recursively search into sub-folders, or an
	 * integer to specify the maximum depth.
	 * @param	boolean	True to return the full path to the folders.
	 * @param	array	Array with names of folders which should not be shown in
	 * the result.
	 * @return	array	Folders in the given folder.
	 * 
	 */
	public static function folders($path, $filter = '.', $recurse = false, $fullpath = false, $exclude = array('.svn', 'CVS'))
	{
		// Initialize variables
		$arr = array();

		// Check to make sure the path valid and clean
		$path = Path::clean($path);

		// Is the path a folder?
		if (!is_dir($path)) {
			throw(new Exception('Folder::folder: Path is not a folder Path:'. $path));
			return false;
		}

		// read the source directory
		$handle = opendir($path);
		while (($file = readdir($handle)) !== false)
		{
			if (($file != '.') && ($file != '..') && (!in_array($file, $exclude))) {
				$dir = $path . "/" . $file;
				$isDir = is_dir($dir);
				if ($isDir) {
					// Removes filtered directories
					if (preg_match("/$filter/", $file)) {
						if ($fullpath) {
							$arr[] = $dir;
						} else {
							$arr[] = $file;
						}
					}
					if ($recurse) {
						if (is_integer($recurse)) {
							$arr2 = Folder::folders($dir, $filter, $recurse - 1, $fullpath);
						} else {
							$arr2 = Folder::folders($dir, $filter, $recurse, $fullpath);
						}
						
						$arr = array_merge($arr, $arr2);
					}
				}
			}
		}
		closedir($handle);

		asort($arr);
		return $arr;
	}

	/**
	 * Lists folder in format suitable for tree display. Only for local. 
	 *
	 * @access	public
	 * @param	string	The path of the folder to read.
	 * @param	string	A filter for folder names.
	 * @param	integer	The maximum number of levels to recursively read,
	 * defaults to three.
	 * @param	integer	The current level, optional.
	 * @param	integer	Unique identifier of the parent folder, if any.
	 * @return	array	Folders in the given folder.
	 * 
	 */
	public static function listFolderTree($path, $filter="", $maxLevel = 3, $level = 0, $parent = 0)
	{
		$dirs = array ();
		if ($level == 0) {
			$GLOBALS['_Folder_folder_tree_index'] = 0;
		}
		if ($level < $maxLevel) {
			$folders = Folder::folders($path, $filter);
			// first path, index foldernames
			foreach ($folders as $name) {
				$id = ++$GLOBALS['_Folder_folder_tree_index'];
				$fullName = Path::clean($path . DS . $name);
				$dirs[] = array(
					'id' => $id,
					'parent' => $parent,
					'name' => $name,
					'fullname' => $fullName,
					'relname' => str_replace(PATH_ROOT, '', $fullName)
				);
				$dirs2 = Folder::listFolderTree($fullName, $filter, $maxLevel, $level + 1, $id);
				$dirs = array_merge($dirs, $dirs2);
			}
		}
		return $dirs;
	}

	/**
	 * Makes path name safe to use.
	 *
	 * @access	public
	 * @param	string The full path to sanitise.
	 * @return	string The sanitised string.
	 * 
	 */
	public static function makeSafe($path)
	{
		$ds = "/";
		$regex = array('#[^A-Za-z0-9:\_\-' . $ds . ' ]#');
		return preg_replace($regex, '', $path);
	}

}