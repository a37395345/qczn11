<?php
/**
* HtmlHelper simple code
*
* @package 	Imag.Framework
* @subpackage  static 
* @author   gary wang (msn:wangbaogang123@hotmail.com,qq:465474550)
* 
*/

include_once("httpclient".DS."simple_html_dom.php");

Class HtmlHelper{
	
	private $baseurl = "";
	
	private $config;
	
	private $statichtml;
	
	public function __construct($statichtml){
		$this->statichtml = $statichtml;
	}
	
	/**
	 * Setter
	 * 
	 * @param	string $url
	 */
	public function setBaseurl($url)
	{
		$this->baseurl = $url;
	}
	
	public function setConfig($config)
	{
		$this->config = $config;
	}
	
	/**
	 * 
	 * Fetch static html of replaced link code in source html 
	 * 
	 * @param	string $source source html
	 * @param	array $pattern 2dimension array include source and replace pattern default null
	 * @param	array $sourcePattern source pattern array
	 * @param	array $replacePattern replace pattern array
	 * @return	string static html.
	 * 
	 */
	public function fetch($source,$pattern=array(),$sourcePattern=array(),$replacePattern=array())
	{
		
		$html = str_get_html($source);
		$uri = Factory::getURI();
		if(empty($this->baseurl)){
			$baseurl = $uri->getPath();
		}else{
			$baseurl = $this->baseurl;
		}
		
		if(empty($this->config)){
			$this->config = Config::getConfig("static");
		}
		
		if(!empty($pattern)){
			$this->config->addPattern($pattern);
		}
		
		foreach($html->find('a') as $e){
			if(empty($e->href)){
				continue;
			}
			
            $e->href = $this->html_preg_replace($e->href);
            $e->href = str_replace(".php",".html",$e->href);
			$e->href = $uri->resolve_url($e->href,$baseurl);
			
		}

		foreach($html->find('area') as $e){
			if(empty($e->href)){
				continue;
			}
			$e->href = str_replace(".php",".html",$e->href);
			$e->href = $uri->resolve_url($e->href,$baseurl);
		}

		foreach($html->find('link') as $e){
			if(empty($e->href)){
				continue;
			}
			$e->href = $uri->resolve_url($e->href,$baseurl);
		}

		foreach($html->find('script') as $e){
			if(empty($e->src)){
				continue;
			}
			$e->src = $uri->resolve_url($e->src,$baseurl);
		}

		foreach($html->find('img') as $e){
			if(empty($e->src)){
				continue;
			}
			$e->src = $uri->resolve_url($e->src,$baseurl);
		}
        
		foreach($html->find('embed') as $e){
			if(empty($e->src)){
				continue;
			}
			$e->src = $uri->resolve_url($e->src,$baseurl);
		}
        
		return $html->__toString();

	}
	
	private function html_preg_replace($url){
		
		$pattern = $this->config->getPattern();
		$key = $this->config->getIndex($url);
		if(!array_key_exists($key,$pattern))
		{
			return $url;
		}
		
		$config = $pattern[$key];
		
		$result = $url;
		
		switch ($config["rule"]) {
		    case "reg":
		    	$result = preg_replace(array($config["source"]), array($config["replace"]), $url);
		    	//var_dump("reg:".$result);
		        break;
		    case "sql":
		    	include_once(dirname(__FILE__).DS."dbhelper.php");
		    	$sql = preg_replace(array($config["source"]), array($config["sql"]), $url);
		    	$row = DbHelper::getRow($sql);
		    	if(empty($row)){
		    		throw(new Exception("not found sql:".$sql));
		    		break;
		    	}
		    	preg_match_all($this->statichtml->getRegular(),$config["replace"],$keys);
		    	
		    	$result = $config["replace"];
		    		
				foreach($keys[1] as $target){
			    	if(!empty($config["function"])){
			    		$row[$target] = call_user_func($config["function"],$row[$target]);
			    	}
			    	$result = str_replace("{".$target."}", $row[$target], $result);
				}
				//var_dump("sql:".$result);
		        break;
		    //default:
		}
		return $result;
	}

}
?>