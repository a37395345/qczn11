<?php
/***************************************************************************
 *.php
 *功能：Pagination 分页类
 *作者：王保刚 gary wang MSN:wangbaogang123@hotmail.com
 *简介：原创
 *
 */

/**
 * 基本分页类
 *
 *
 * @package		imag
 * @subpackage	util
 */


class Pagination{

	/**
	 * Base url
	 *
	 * @var		string
	 * @access	private
	 */
	private $_baseurl;

	/**
	 * Total items
	 *
	 * @var		int
	 * @access	private
	 */
	private $_totalitems;

	/**
	 * Item numbers per page
	 *
	 * @var		int
	 * @access	private
	 */
	private $_perpage;

	/**
	 * page
	 *
	 * @var		int
	 * @access	private
	 */
	private $_page;

	/**
	 * 
	 *
	 * @var		boolean
	 * @access	private
	 */
	private $_addprevnexttext = TRUE;


	/**
	 *  total page
	 *
	 * @var		int
	 * @access	private
	 */
	private $_totalpage;

	/**
	 *  max page
	 *
	 * @var		int
	 * @access	private
	 */
	private $_maxpage = 20;


	/**
	 * page style
	 *
	 * @var		PageStyle
	 * @access	private
	 */
	private $_pagestyle;

	/**
	 * static link
	 *
	 * @var	    string
	 * @access	private
	 */
	private $_staticLink = "{baseurl}_{page}.html";

	/**
	 * dynamic link
	 *
	 * @var	    string
	 * @access	private
	 */
	private $_dynamicLink = "{baseurl}p={page}";

	/**
	 * link type
	 *
	 * @var		string
	 * @access	private
	 */
	private $_type = "php";

	/**
	 * is show total numbers
	 *
	 * @var		boolean
	 * @access	private
	 */
	private $showtotal = true;

	/**
	 * Constructor.
	 *
	 * @access	protected
	 * @param	array An optional associative array of configuration settings.
	 *
	 * Init all of the variables
	 * 
	 */
	public function __construct( $config = array() )
	{
		if (array_key_exists( 'baseurl', $config ) ) {
			$this->_baseurl = $config['baseurl'];
		}
		if (array_key_exists( 'totalitems', $config ) ) {
			$this->_totalitems = $config['totalitems'];
		}

		if (array_key_exists( 'perpage', $config ) ) {
			$this->_perpage = $config['perpage'];
		}

		if (array_key_exists( 'maxpage', $config ) ) {
			$this->_maxpage = $config['maxpage'];
		}

		if (array_key_exists( 'page', $config ) ) {
			$this->_page = $this->_getStartFromPage($config['page']);
		}

		if (array_key_exists( 'pagestyle', $config ) ) {
			$this->_pagestyle = $config['pagestyle'];
		}else{
			$this->_pagestyle = new PageStyle();
		}

		if (array_key_exists( 'type', $config ) ) {
			$this->_type = $config['type'];
		}

		if (array_key_exists( 'showtotal', $config ) ) {
			$this->showtotal = $config['showtotal'];
		}

	}
	
	/**
	 * Filter page
	 *
	 * @access	private
	 * 
	 * @param	null
	 * @return	null
	 *
	 */
	private function _getStartFromPage($page){

		$totalpage = ceil($this->_totalitems/$this->_perpage);
		if($page<1){
			$page = 1;
		}
		if($page>$totalpage){
			$page = $totalpage;
		}

		return $page;

	}

	/**
	 * Reset base url
	 *
	 * @access	private
	 * 
	 * @param	null
	 * @return	null
	 *
	 */
	private function _resetUrl(){

		if($this->_type=="php"){
			if(strpos($this->_baseurl, "?")===false){
				$this->_baseurl .= "?";
			}else{
				$this->_baseurl .= "&";
			}
		}

	}

	/**
	 * Get link
	 *
	 * @access	private
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	private function _getLink($name){

		if($this->_type=="php"){
			$base = $this->_dynamicLink;
		}else{
			$base = $this->_staticLink;
		}

		$base = str_replace("{baseurl}", $this->_baseurl, $base);
		$base = str_replace("{page}", $name, $base);

		return $base;

	}

	/**
	 * Generate pagination
	 *
	 * @access	public
	 * 
	 * @param	null
	 * @return	string
	 *
	 */
	public function generate(){

		$this->_resetUrl();

		$this->_totalpage = ceil($this->_totalitems/$this->_perpage);

		if ( $this->_totalpage == 1 ){
			return '';
		}

		$on_page = $this->_page;
		//print_r($on_page);exit;

		//var_dump($on_page);
		//var_dump($this->_totalitems);
		//var_dump($this->_perpage);
		//var_dump($this->_totalpage);

		$page_string = '';

		if ( $this->_totalpage > $this->_maxpage ){

			if($on_page < floor($this->_maxpage/2)){ //<5
				$first_page  = 1;
			}else{
				$first_page  = $on_page - floor($this->_maxpage/2)+1;//保证第5个
			}
			$this_total = $first_page + $this->_maxpage-1;//最后一个 保证存在10个

			if(($first_page + $this->_maxpage) >= ($this->_totalpage-$this->_totalpage%$this->_maxpage) && $on_page>floor($this->_maxpage/2)+1){
					$first_page = $this->_totalpage - $this->_maxpage+1; //最后一个 保证存在10个
					$this_total  = $this->_totalpage;
			}
			for($i = $first_page; $i <= $this_total; $i++){
				$page_string .= ( $i == $on_page ) ? $this->_pagestyle->getNormalText($i) : $this->_pagestyle->getNormal($this->_getLink($i),$i);
				if ( $i <  $this->_totalpage ){
					$page_string .= $this->_pagestyle->separator;
				}
			}
		}
		else
		{
			for($i = 1; $i < $this->_totalpage + 1; $i++)
			{
				$page_string .= ( $i == $on_page ) ? $this->_pagestyle->getNormalText($i) : $this->_pagestyle->getNormal($this->_getLink($i),$i);
				if ( $i <  $this->_totalpage ){
					$page_string .= $this->_pagestyle->separator;
				}
			}

		}

		if ( $this->_addprevnexttext )
		{
			if ( $on_page > 1 )
			{
				$page_string = $this->_pagestyle->getFirst($this->_getLink(1)).$this->_pagestyle->separator.$this->_pagestyle->getPrevious($this->_getLink($on_page-1)).$this->_pagestyle->separator.$this->_pagestyle->separator. $page_string;
	
			}

			if ( $on_page < $this->_totalpage )
			{
				$page_string .= $this->_pagestyle->separator.$this->_pagestyle->getNext($this->_getLink($on_page+1));
				$page_string .= $this->_pagestyle->separator.$this->_pagestyle->getLast($this->_getLink($this->_totalpage));
			}	
			

			if ( $on_page == $this->_totalpage )
			{
				
				//$page_string .= $this->_pagestyle->separator.$this->_pagestyle->getNext('');
				//$page_string .= $this->_pagestyle->separator.$this->_pagestyle->getLast('');
			}
			
						
		}
		if($this->showtotal){
			$page_string = $this->_pagestyle->getTotalnumText($this->_totalitems).$this->_pagestyle->separator.$page_string;
		}

		return $page_string;

	}

	/**
	 * Return page 
	 *
	 * @access	public
	 * 
	 * @param	null
	 * @return	string
	 *
	 */
	public function getPage(){
		if($this->_page==0){
			return 1;
		}
		return $this->_page;
	}
	/**
	 * Return totolpage 
	 *
	 * @access	public
	 * 
	 * @param	null
	 * @return	string
	 *
	 */
	public function getTotolPage(){
		return ceil($this->_totalitems/$this->_perpage);
	}

	
	/**
	 * Return link String 
	 *
	 * @access	public
	 * 
	 * @param	null
	 * @return	string
	 *
	 */
	public function fetch(){
		return $this->generate();
	}

	/**
	 * Echo link String 
	 *
	 * @access	public
	 * 
	 * @param	null
	 * @return	null
	 *
	 */
	public function display(){
		echo $this->generate();
	}
}
?>