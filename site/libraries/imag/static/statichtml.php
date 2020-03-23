<?php
/**
 * StaticHtml generate static html by config defined producter.
 * @package 	Imag.Framework
 * @subpackage	static
 * @author      gary wang MSN:wangbaogang123@hotmail.com
 * 
 * <code>
 * 		$options = array(
 * 
 * 			"php" => "/news/index.php?cid={id}&p={p}",
 * 			"html"  => "/news/{pid}.html",
 * 			"itemlist"   => array(array("id"=>"1","p"=>2,"pid"="401"))
 * 			
 * 		);
 * 		
 * 		$statichtml = new StaticHtml($options);
 * 		$statichtml->generate();
 * 		
 * 		or
 * 
 * 		$statichtml = new StaticHtml();
 * 		$statichtml->generate($options);
 * 
 * </code>
*/

import("imag.filesystem.folder");
import("imag.utilities.arrayhelper");

Class StaticHtml{
	/**
	 * source php path
	 */
	private $php  = ""; // /news/index.php?cid={id}&p={p} /news/detail.php?pid={id}
	
	/**
	 * target html path
	 */
	private $html = ""; // /news/index_{q}.html /news/{q}.html
	
	/**
	 * Source data 2Dimension array
	 */
	private $itemlist = null; //array(array("id"=>"test1","p"=>"test1"))
	
	/**
	 * File class
	 */
	private $filer;     //FileSystem
	
	/**
	 * Html product 
	 */
	private $htmlfilter = null; //HtmlHelper
	
	/**
	 * Regular express
	 */
	private $regular = '/\{(.*?)\}/s';
	
	/**
	 * Config::homedir()
	 */
	private $homedir = ""; 
	
	/**
	 * Config::homeurl()
	 */
	private $homeurl = "";

	public function __construct( $options = array() )
	{
		if(!empty($options)){
			$this->setOption($options);
		}
	}
	
	public function getRegular()
	{
		return 	$this->regular;
	}
	
	/**
	 * @param	array	$options set config
	 */
	private function setOption($options = array())
	{
		if ( array_key_exists( 'php', $options ) ) {
			$this->php = $options["php"];
		}

		if ( array_key_exists( 'html', $options ) ) {
			$this->html = $options["html"];
		}

		if ( array_key_exists( 'itemlist', $options ) ) {
			$this->itemlist = $options["itemlist"];
		}
		
		if(!empty($this->itemlist)){
			//is 2 dimension array
			$dim = ArrayHelper::getmaxdim($this->itemlist);
			
			if($dim==1){
				$this->itemlist = array($this->itemlist);
			}elseif($dim>2){
				throw(new Exception("Dimension out of range! Dim is:".$dim));
			}
		}

		if ( array_key_exists( 'htmlfilter', $options ) ) {
			$this->htmlfilter = $options["htmlfilter"];
		}else{
			import("imag.static.htmlhelper");
			$this->htmlfilter = new HtmlHelper($this);
		}
		$this->htmlfilter->setBaseurl($this->html);
		
		if ( array_key_exists( 'config', $options ) ) {
			$this->htmlfilter->setConfig($options['config']);
		}

		if (array_key_exists( 'homedir', $options )){
			$this->homedir = $options["homedir"];
		}else{
			$config = Config::getConfig("static");
			$this->homedir = $config->productPath();
		}

		if (array_key_exists('homeurl', $options )){
			$this->homeurl = $options["homeurl"];
		}else{
			$this->homeurl = Config::homeurl();
		}

		if (array_key_exists( 'filer', $options )){
			$this->filer = $options["filer"];
		}else{
			import("imag.filesystem.filesystem");
			$this->filer = new FileSystem();
		}
	}
	
	/**
	 * Make save path and html source
	 * @return	stdClass
	 */
	private function fetch(){
		
		$object = new stdClass();

		preg_match_all($this->regular,$this->php,$keys);
		$phpkeys = $keys[1];

		preg_match_all($this->regular,$this->html,$keys);
		$htmlkeys = $keys[1];

		if(empty($this->itemlist)){
			$this->itemlist = array(array());
		}
		
		//save path
		$dirlist = array();
		$htmllist = array();
		
		for($i=0;$i<count($this->itemlist);$i++){

			$srcurl   = $this->php;
			$savedir  = $this->html;

			for($p=0;$p<count($phpkeys);$p++){
				$srcurl = str_replace("{".$phpkeys[$p]."}", $this->itemlist[$i][$phpkeys[$p]], $srcurl);
			}
			
			for($h=0;$h<count($htmlkeys);$h++){
				$savedir = str_replace("{".$htmlkeys[$h]."}", $this->itemlist[$i][$htmlkeys[$h]], $savedir);
			}

			$html = $this->filer->getHtmlByCurl($this->homeurl.$srcurl);
			$dirlist[]  = $savedir;
			$htmllist[] = $html;
		}
		
		
		$object->dirlist	= $dirlist;
		$object->htmllist	= $htmllist;
		return $object;

	}

	/**
	 * generate html
	 */
	public function generate($options = array()){
		
		if(!empty($options)){
			$this->setOption($options);
		}
		
		$object = $this->fetch();
		for($i=0;$i<count($object->dirlist);$i++){
			if($this->htmlfilter!=null){
				$object->htmllist[$i] = $this->htmlfilter->fetch($object->htmllist[$i]);
			}
			$savepath = $this->homedir.$object->dirlist[$i];
			Folder::create(dirname($savepath));
			//save 
			$this->filer->write($savepath,$object->htmllist[$i]);
		}

	}

}
?>