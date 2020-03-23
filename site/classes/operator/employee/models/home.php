<?php
class ModelHome extends Model
{
	var $table = array("name"=>"province","key"=>"province_id");
	function __construct()
	{
		parent::__construct();
	}
	
	function store($data,$table=''){
		if(!$this->_db->insertObject($this->table["name"],$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}

	}

	function update($data,$id,$table=''){
		return $this->_db->updateObject($this->table["name"],$data,$id);

	}

	function getList($start,$per_page,$where='')
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}`  WHERE  1  {$where} ORDER BY `is_top` DESC, `sort_id` DESC LIMIT $start,$per_page";
		//var_dump($sql);
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				$list[] = $row;
			}
		}		
		
		$this->_db->freeresult($result);
		return $list;
	}
    
    function get_level_list()
    {
        $list = null;

        $sql = "SELECT * FROM `employee_level`  WHERE  1   ORDER BY `created` DESC";
        if( ($result = $this->_db->query($sql)) )
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {    
                $list[] = $row;
            }
        }        
        
        $this->_db->freeresult($result);
        return $list;
    }    
    function get_shop_list(){
    	$list = null;

        $sql = "SELECT * FROM `shop`  WHERE  1 ";
        if( ($result = $this->_db->query($sql)) )
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {    
                $list[] = $row;
            }
        }        
        
        $this->_db->freeresult($result);
        return $list;
    }
    function get_city_list($province_id)
    {
        $list = null;

        $sql = "SELECT * FROM `city`  WHERE  province_id = {$province_id}   ORDER BY `time` DESC";
        //echo $sql;
        if( ($result = $this->_db->query($sql)) )
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {    
                $list[] = $row;
            }
        }        
        
        $this->_db->freeresult($result);
        return $list;
    }  
    
    function check_video($big_pic, $video_url, &$row)
    {
        if (strripos($big_pic, '.flv') !== false || strripos($big_pic, '.mp4') !== false)
        {
            $row['video'] = '/thumb/'.$big_pic;
            return;
        }
        else if (empty($big_pic) && !empty($video_url))
        {
            if (strripos($video_url, '.flv') !== false || strripos($video_url, '.mp4') !== false)
            {
                $row['video'] = $video_url;
                return;
                //echo $row['video'];
                //return 1;
            }            
        }
    
        $row['video'] = '';   
    }
        
    
    function getTitle($uid)
    {
        $list = null;

        $sql = "SELECT title FROM `look_book_cate` WHERE  `look_book_cate_id` ='{$uid}'";

        if(($result = $this->_db->query($sql)))
        {
            if(($row = $this->_db->fetchrow($result)))
            {
                $list = $row;
            }
        }

        $this->_db->freeresult($result);
        return $list['title'];
    }    
	
	function getTotal($where=1)
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}`  {$where}";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row['total'];
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getInfo($uid)
	{
		$list = null;
		
		$sql = "SELECT * FROM `{$this->table['name']}`  WHERE  `{$this->table['key']}`='{$uid}'";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function get_area($type)
	{
		$list = null;
		if($type<>""){
						$sql = "SELECT * FROM {$type} ";
				
				 if(($result = $this->_db->query($sql)))
				{
					while ( ($row = $this->_db->fetchrow($result)) )
					{
						$list[] = $row;
					}
				}
				$this->_db->freeresult($result);
		}
		return $list;
	}

    function delete($aid)
    {
        $sql = "SELECT * FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
        $result = $this->_db->query($sql);
        $row = $this->_db->fetchrow($result);
        if (!empty($row))
        {
            $upload_root = Config::homedir()."/thumb/";
            
            foreach($row as $key=>$val)
            {
                if (strpos($key, 'image') != false)
                {
                    if (file_exists($upload_root.$row[$key]))
                        FileSystem::delete($upload_root.$row[$key]);    
                }
            }                               
        }
        
        
        $sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
        return $this->_db->query($sql);
    }

	function getline($data, $colomn = '' ,$table = '', $equ = '=')
    {
        $list   = null;

        if (empty($table)) {
            $table = " `{$this->table['name']}` ";
        }

        if (empty($colomn)) {
            $colomn = " `{$this->table['key']}` ";
        }

        $sql = "SELECT * FROM {$table} WHERE {$colomn} {$equ} '{$data}'";

        if(($result = $this->_db->query($sql)))
        {
            if(($row = $this->_db->fetchrow($result)))
            {
                $list = $row;
            }
        }

        $this->_db->freeresult($result);
        return $list;
    }

	function getNewsrow($data, $colomn = '' ,$table = '', $equ = '=', $search = '')
    {
        $list   = null;

        if (empty($table)) {
            $table = " `news` ";
        }

        if (empty($colomn)) {
            $colomn = " `news_id` ";
        }

        $sql = "SELECT * FROM {$table} WHERE {$colomn} {$equ} '{$data}'";

        if (!empty($search)) {
            $sql = $search;
        }

        if(($result = $this->_db->query($sql)))
        {
            if(($row = $this->_db->fetchrow($result)))
            {
                $list = $row;
            }
        }

        $this->_db->freeresult($result);
        return $list;
    }

	function getRow($uid)
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}` WHERE  `{$this->table['key']}` ='{$uid}'";

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row;
			}
		}

		$this->_db->freeresult($result);
		return $list;
	}
    
    
    function top($uid)
    {
        $sql = "UPDATE `{$this->table['name']}` SET is_top = !is_top WHERE  `{$this->table['key']}` ='{$uid}'";
        //echo $sql;
        //exit;
        return $result = $this->_db->query($sql);
    }    

}
?>