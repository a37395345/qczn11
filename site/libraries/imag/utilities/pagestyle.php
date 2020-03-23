<?php
/***************************************************************************
 *.php
 *功能：Pagination 辅助类 设置分页的样式
 *作者：王保刚 gary wang MSN:wangbaogang123@hotmail.com
 *简介：原创
 *
 */

/**
 * 分页的样式类
 *
 *
 * @package		imag
 * @subpackage	util
 */

class PageStyle{

    /**
	 * Base 
	 *
	 * @var		string
	 * @access	private
	 */
	public $base = "<a href='{link}'>{name}</a>";

	/**
	 * Base 
	 *
	 * @var		string
	 * @access	private
	 */
	public $container = "{name}";

	/**
	 * First 
	 *
	 * @var		string
	 * @access	public
	 */
	public $first = "第一页";

	/**
	 * Previous
	 *
	 * @var		string
	 * @access	public
	 */
	public $previous = "上一页";

	/**
	 * Next
	 *
	 * @var		string
	 * @access	public
	 */
	public $next = "下一页";

	/**
	 * Last
	 *
	 * @var		string
	 * @access	public
	 */
	public $last = "最后一页";

	/**
	 * Normal
	 *
	 * @var		string
	 * @access	public
	 */
	public $normal = "{name}";

	/**
	 * Normal highlight
	 *
	 * @var		string
	 * @access	public
	 */
	public $normaltext = "<b>{name}</b>";
	

	/**
	 * separator
	 * default：&nbsp;
	 * @var		string
	 * @access	public
	 */
	public $separator = "&nbsp;";

	/**
	 * Total number
	 *
	 * @var		string
	 * @access	public
	 */
	public $totalnumtext = "<B>共{total}个</B>";

	/**
	 * Constructor.
	 *
	 * @access	protected
	 * @param	null
	 *
	 * 
	 */
	public function __construct()
	{

	}

	/**
	 * Return first
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getFirst($link,$name=""){
		if(empty($name)){$name=$this->first;}
		return str_replace("{name}", $this->_getBase($link,$name), $this->container);
	}

	/**
	 * Return previous
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getPrevious($link,$name=""){
		if(empty($name)){$name=$this->previous;}
		return str_replace("{name}", $this->_getBase($link,$name), $this->container);
	}

	/**
	 * Return next
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getNext($link,$name=""){
		if(empty($name)){$name=$this->next;}
		return str_replace("{name}", $this->_getBase($link,$name), $this->container);
	}

	/**
	 * Return last
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getLast($link,$name=""){
		if(empty($name)){$name=$this->last;}
		return str_replace("{name}", $this->_getBase($link,$name), $this->container);
	}

	/**
	 * Return normal
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getNormal($link,$name){
		return str_replace("{name}", $this->_getBase($link,$name), $this->normal);
	}

	/**
	 * Return normal text
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getNormalText($name){
		return str_replace("{name}", str_replace("{name}", $name, $this->normaltext), $this->normal);

	}

	/**
	 * Return total number text
	 *
	 * @access	public
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	public function getTotalnumText($total){
		return  str_replace("{total}", $total, $this->totalnumtext);
	}

	

	/**
	 * Return string
	 *
	 * @access	private
	 * 
	 * @param	string
	 * @return	string
	 *
	 */
	private function _getBase($link,$name){

		$base = str_replace("{link}", $link, $this->base);
		$base = str_replace("{name}", $name, $base);
		return $base;
	}


}
?>