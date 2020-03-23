<?php
/**
 * File uploder
 * @package 	Imag.Framework
 * @subpackage  Image
 * @author      gary wang (wangbaogang123@hotmail.com)
 * 
 * usage:
 * $uploader = new Uploader($_FILES["filedata"],Config::homedir()."/upload/");
 * or:
 * $uploader = new Uploader("filedata",Config::homedir()."/upload/");
 * 
 * //if upload path has sub dir else defualt value is time().rand(0,1000)
 * $uploader->setId($id,Array(2,32)); //数据库中本条记录的id 层级 默认 2级 每级32个目录
 * 
 * //if you want to set a name by self or update image else defualt value is time().rand(0,1000)
 * $uploader->setFileName($name);
 * 
 * $uploader->toUpload();
 * 
 */
Class Uploader
{
	
	/**
	* 目标路径
	*/
	private $targetPath="";
	
	/**
	* 文件名称
	*/
	private $fileName = null;

	/**
	* mime类型
	*/
	private $mimeName;
	
	/**
	* 上传的原始文件
	*/
	private $files;
	
	/**
	* 默认有效扩展名
	*/
	private $extensions = Array('.jpeg','.jpg','.png','.gif', '.rar', '.zip');

	/**
	* 目录层级
	*/
	private $level = null;
	
	/**
	* 分级目录id
	*/
	private $id = null;

	private $folder = '';
	
	/**
	* file path
	*/
	public function __construct($file='',$path=''){
		
		if(!empty($file)&&!empty($path)){
			$this->targetPath = $path;
			if(is_array($file)){
				$this->files = $file;
			}else{
				$this->files = Request::getVar($file,'files');
			}
			$this->setFileName(time().rand(0,1000));
			$this->setId(); //设置默认值
		}
		
	}

	/**
	* set id level
	*/
	public function setId($id=null,$level = Array(2,32)){
		$this->level = $level;
		if(empty($id)){
			$this->id    = rand(0,1000000);
		}else{
			$this->id    = (int) $id;
		}
	}
	
	/**
	 * set level
	 */
	public function setLevel($level)
	{
		$this->level = $level;
		return $this;
	}
	
	/**
	* setter file name example: 
	* setFileName(time().rand(0,1000))
	*/
	public function setFileName($name){

		//如果$name是带有后缀类型的参数 则把后缀过滤掉
		$list = explode(".",$name);
		$name = $list[0];

		$this->mimeName = strtolower(strrchr(basename($this->files['name']),"."));//
		$this->fileName = $name.$this->mimeName;

	}

	/**
	 * 
	 */
	public function getFileName(){
		return $this->fileName;
	}

	/**

	*/
	public function getFolder(){
		return $this->folder;
	}

	public function getFolderFile(){
		return $this->folder."/".$this->fileName;
	}
	
	/**
	 * set Extension
	 */
	public function setExtensions($extensions){
		$this->extensions = $extensions;
	}

	/**
	* 扩展名 有效性检查
	*/
	public function checkExtension($extensions = null){
		if($extensions == null){
			$extensions = $this->extensions;
		}
		if(array_search($this->mimeName,$extensions)===FALSE){
			return false;
		}
		return true;
	}

	/**
	* 上传图片
	*/
	public function toUpload(){
		if ( !move_uploaded_file($this->files['tmp_name'],$this->getUploadPath())){
			return false;
		}
		return true;

	}

	/**
	* 删除文件
	*/
	public static function deleteFile($filepath){

		if(file_exists($filepath) && filetype($filepath)=="file"){
			 if(!unlink($filepath)){
				return false;
			 }
		}
		return true;
	}

	/**
	* 取得上传目录
	*/
	public function getUploadPath(){
		/*
		if($this->fileName==null){
			$this->setFileName(time().rand(0,1000));
		}
		*/
        //added by kimi 20121029
        if (!file_exists($this->targetPath.$this->getFolderDir()))
        {
            $this->mkdirs($this->targetPath.$this->getFolderDir(),  0777);
        }
        //added end
        
		return $this->targetPath.$this->getFolderDir().DS.$this->fileName;
	}
    
    
    //added by kimi 20121029
    public function mkdirs($dir, $mode = 0777)
    {
        if (is_dir($dir) || @mkdir($dir, $mode)) return TRUE;
        if (!$this->mkdirs(dirname($dir), $mode)) return FALSE;
        return @mkdir($dir, $mode);
    }
    //added end    
	
	/**
	* 根据给定的参数 取得上传分级目录 (最多支持2级分级目录)
	*/
	public function getFolderDir()
	{
		if($this->level==null){
			return "";
		}

		if(!(is_array($this->level))){
			return "";
		}
		
		if(count($this->level)<2){
			return "";
		}

		//层级为1
		if($this->level[0]==1){
			$this->folder = $this->id%$this->level[1]+1;
			return $this->folder;
		}
		
		//层级为2
		$list = array();
		$list['first']  = ceil($this->id/$this->level[1])%$this->level[1]+1;
		$list['second'] = $this->id%$this->level[1]+1;
		$this->folder = $list['first']."/".$list['second'];
		return $this->folder;

	}
	
	public static function getFullPath($filename)
	{
		$uploader = new Uploader();
		$uploader->setFileName($filename);
		return $uploader->getUploadPath();
	} 

}
?>