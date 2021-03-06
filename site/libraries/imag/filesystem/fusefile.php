<?php

import('imag.filesystem.path');

/**
 * A File handling class
 *
 * @static
 * @package 	Imag.Framework
 * @subpackage	FileSystem
 * @modify      gary wang (wangbaogang123@hotmail.com)
 */
class FuseFile
{
	public static $ftpconfig;
	
	/**
	 * Gets the extension of a file name
	 *
	 * @param string $file The file name
	 * @return string The file extension
	 * 
	 */
	public static function getExt($file) {
		$dot = strrpos($file, '.') + 1;
		return substr($file, $dot);
	}

	/**
	 * Strips the last extension off a file name
	 *
	 * @param string $file The file name
	 * @return string The file name without the extension
	 * 
	 */
	public static function stripExt($file) {
		return preg_replace('#\.[^.]*$#', '', $file);
	}

	/**
	 * Makes file name safe to use
	 *
	 * @param string $file The name of the file [not full path]
	 * @return string The sanitised string
	 * 
	 */
	public static function makeSafe($file) {
		$regex = array('#(\.){2,}#', '#[^A-Za-z0-9\.\_\- ]#', '#^\.#');
		return preg_replace($regex, '', $file);
	}

	/**
	 * Copies a file
	 *
	 * @param string $src The path to the source file
	 * @param string $dest The path to the destination file
	 * @param string $path An optional base path to prefix to the file names
	 * @return boolean True on success
	 * 
	 */
	public static function copy($src, $dest, $path = null)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);

		// Prepend a base path if it exists
		if ($path) {
			$src = Path::clean($path."/".$src);
			$dest = Path::clean($path."/".$dest);
		}

		//Check src path
		if (!is_readable($src)) {
			throw(new Exception('File::copy: ' . 'Cannot find or read file'));
			return false;
		}

		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			//Translate the destination path for the FTP account
			$dest = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $dest), '/');
			if (!$ftp->store($src, $dest)) {
				// FTP connector throws an error
				return false;
			}
			$ret = true;
		} else {
			// If the parent folder doesn't exist we must create it
			if (!FuseFile::exists(dirname($dest),false)) {
				import('imag.filesystem.folder');
				Folder::create(dirname($dest));
			}
			
			if (!@ copy($src, $dest)) {
				throw(new Exception('Copy failed! src:'.$src."dest:".$dest));
				return false;
			}
			$ret = true;
		}
		return $ret;
	}

	/**
	 * Delete a file or array of files
	 *
	 * @param mixed $file The file name or an array of file names
	 * @return boolean  True on success
	 */
	public static function delete($file)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);

		if (is_array($file)) {
			$files = $file;
		} else {
			$files[] = $file;
		}

		// Do NOT use ftp if it is not enabled
		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);
		}

		foreach ($files as $file)
		{
			$file = Path::clean($file);
			
			if(!FuseFile::exists($file)){
				continue;
			}

			// Try making the file writeable first. If it's read-only, it can't be deleted
			// on Windows, even if the parent folder is writeable
			@chmod($file, 0777);

			// In case of restricted permissions we zap it one way or the other
			// as long as the owner is either the webserver or the ftp
			if (@unlink($file)) {
				// Do nothing
			} elseif ($ftpOptions['ftp_enable'] == 1) {
				$file = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $file), '/');
				if (!$ftp->delete($file)) {
					// FTP connector throws an error
					return false;
				}
			} else {
				$filename	= basename($file);
				throw(new Exception('SOME_ERROR_CODE Delete failed '.$filename));
				return false;
			}
		}

		return true;
	}

	/**
	 * Moves a file
	 *
	 * @param string $src The path to the source file
	 * @param string $dest The path to the destination file
	 * @param string $path An optional base path to prefix to the file names
	 * @return boolean True on success
	 */
	public static function move($src, $dest, $path = '')
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);

		if ($path) {
			$src = Path::clean($path.DS.$src);
			$dest = Path::clean($path.DS.$dest);
		}

		//Check src path
		if (!FuseFile::exists($src,false)) {
			throw(new Exception('File::move Cannot find, read or write file'.$src));
			return false;
		}

		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			//Translate path for the FTP account
			$src	= Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $src), '/');
			$dest	= Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $dest), '/');

			// Use FTP rename to simulate move
			if (!$ftp->rename($src, $dest)) {
				throw(new Exception('Rename failed'));
				return false;
			}
		} else {
			if (!@ rename($src, $dest)) {
				throw(new Exception('Rename failed'));
				return false;
			}
		}
		return true;
	}

	/**
	 * Read the contents of a file
	 *
	 * @param string $filename The full file path
	 * @param boolean $incpath Use include path
	 * @param int $amount Amount of file to read
	 * @param int $chunksize Size of chunks to read
	 * @param int $offset Offset of the file
	 * @return mixed Returns file contents or boolean False if failed
	 */
	public static function read($filename, $incpath = false, $amount = 0, $chunksize = 8192, $offset = 0)
	{
		// Initialize variables
		$data = null;
		if($amount && $chunksize > $amount) { $chunksize = $amount; }
		if (false === $fh = fopen($filename, 'rb', $incpath)) {
			throw(new Exception('21,File::read: Unable to open file '.$filename));
			return false;
		}
		clearstatcache();
		if($offset) fseek($fh, $offset);
		if ($fsize = @ filesize($filename)) {
			if($amount && $fsize > $amount) {
				$data = fread($fh, $amount);
			} else {
				$data = fread($fh, $fsize);
			}
		} else {
			$data = '';
			$x = 0;
			// While its:
			// 1: Not the end of the file AND
			// 2a: No Max Amount set OR
			// 2b: The length of the data is less than the max amount we want
			while (!feof($fh) && (!$amount || strlen($data) < $amount)) {
				$data .= fread($fh, $chunksize);
			}
		}
		fclose($fh);

		return $data;
	}

	/**
	 * Write contents to a file
	 *
	 * @param string $file The full file path
	 * @param string $buffer The buffer to write
	 * @return boolean True on success
	 */
	public static function write($file, $buffer)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		
		//var_dump(self::$ftpconfig);
		//unset(self::$ftpconfig);

		// If the destination directory doesn't exist we need to create it
		if (!FuseFile::exists(dirname($file),false)) {
			import('imag.filesystem.folder');
			Folder::create(dirname($file));
		}

		if ($ftpOptions['ftp_enable']) {
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			// Translate path for the FTP account and use FTP write buffer to file
			$file = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $file), '/');
			$ret = $ftp->write($file, $buffer);
		} else {
			$file = Path::clean($file);
			$ret = file_put_contents($file, $buffer);
		}
		return $ret;
	}

	/**
	 * Moves an uploaded file to a destination folder
	 *
	 * @param string $src The name of the php (temporary) uploaded file
	 * @param string $dest The path (including filename) to move the uploaded file to
	 * @return boolean True on success
	 */
	public static function upload($src, $dest)
	{
		// Initialize variables
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);
		$ret		= false;

		// Ensure that the path is valid and clean
		$dest = Path::clean($dest);

		// Create the destination directory if it does not exist
		$baseDir = dirname($dest);
		if (!FuseFile::exists($baseDir,false)) {
			import('imag.filesystem.folder');
			Folder::create($baseDir);
		}

		if ($ftpOptions['ftp_enable']) {
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance(
				$ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,
				$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']
			);

			//Translate path for the FTP account
			$dest = Path::clean(str_replace(PATH_ROOT, $ftpOptions['ftp_root'], $dest), '/');

			// Copy the file to the destination directory
			if ($ftp->store($src, $dest)) {
				$ftp->chmod($dest, 0777);
				$ret = true;
			} else {
				throw(new Exception('21,WARNFS_ERR02'));
			}
		} else {
			if (is_writeable($baseDir) && move_uploaded_file($src, $dest)) { // Short circuit to prevent file permission errors
				if (Path::setPermissions($dest)) {
					$ret = true;
				} else {
					throw(new Exception('21,WARNFS_ERR01'));
				}
			} else {
				throw(new Exception('21,WARNFS_ERR02'));
			}
		}
		return $ret;
	}

	/**
	 * Wrapper for the standard file_exists function
	 *
	 * @param string $file File path
	 * @return boolean True if path is a file
	 */
	public static function exists($file,$local=true)
	{
		
		!empty(self::$ftpconfig) || self::$ftpconfig = Config::getConfig("ftp");
		$ftpOptions = self::$ftpconfig->getArray();
		//unset(self::$ftpconfig);
		if(!$local&&$ftpOptions['ftp_enable']){
			// Connect the FTP client
			import('imag.client.ftp');
			$ftp = FTP::getInstance($ftpOptions['ftp_host'], $ftpOptions['ftp_port'], null,$ftpOptions['ftp_user'], $ftpOptions['ftp_pass']);
			return $ftp->exists($file);
		}
		
		return is_file(Path::clean($file));
	}

	/**
	 * Returns the name, sans any path
	 *
	 * param string $file File path
	 * @return string filename
	 */
	public static function getName($file) {
		$slash = strrpos($file, DS) + 1;
		return substr($file, $slash);
	}
}
