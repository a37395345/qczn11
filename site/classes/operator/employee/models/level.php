<?php
class ModelLevel extends Model
{
	var $table = array("name"=>"employee_level","key"=>"id");
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

	function getLevel1List($start,$per_page,$where=1, $cate_id, $pid=0)
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}` WHERE  {$where} ORDER BY `created` DESC LIMIT $start,$per_page";
        //echo $sql;
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{

                $list[] = $row;
			}

            //$list['multi_choice'] = $this->get_multi_choice($cate_id);
		}		
		
		$this->_db->freeresult($result);
		return $list;
	}


    function isChecked($pid, $cid, $cate_id){
        switch($cate_id){
            case 1:
                $fields = 'target_id';
                break;
            case 2:
                $fields = 'age_id';
                break;
            case 3:
                $fields = 'effect_id';
                break;
            case 4:
                $fields = 'season_id';
                break;
            case 5:
                $fields = 'serials_id';
                break;
            case 6:
                $fields = 'cate_id';
                break;
        }
        $sql = "SELECT {$fields} FROM product WHERE pid = '{$pid}' ";
        $result = $this->_db->query($sql);
        $row = $this->_db->fetchrow($result);
        if ($row){
            $ids = $row[$fields];
            $ids = ','.$ids.',';
            if (strpos($ids, ','.$cid.',') !== false){
                return 1;
            }else{
                return 0;
            }
        }

        return 0;
    }


    function getCompositionList()
    {
        $list = null;

        $sql = "SELECT * FROM `product_composition`  ORDER BY `updated` DESC ";
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
    
    function getVideoList()
    {
        $list = null;

        $sql = "SELECT * FROM `product_video` WHERE is_active = 1 ORDER BY `updated` DESC ";
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





    function getLevel2List($start,$per_page,$where=1)
    {
        $list = null;

        $sql = "SELECT a.*, b.title as level1_title FROM look_book_cate a, look_book_cate b
WHERE a.parent_id = b.look_book_cate_id
AND a.level_id = 2
AND b.level_id = 1 {$where} ORDER BY a.sort_id DESC LIMIT $start,$per_page";
      
        if( ($result = $this->_db->query($sql)) )
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {    
                $preSql = "SELECT min(`sort_id`) as preOrder FROM `{$this->table['name']}` WHERE `sort_id` > {$row['sort_id']} AND level_id = 2 ";
                $prerow = $this->_db->fetchrow($this->_db->query($preSql));
                $row['preOrder'] = (empty($prerow['preOrder']) ? 'top' : $prerow['preOrder']);
                $nextSql = "SELECT max(`sort_id`) as nextOrder FROM `{$this->table['name']}` WHERE `sort_id` < {$row['sort_id']} AND level_id = 2";
                $nextrow = $this->_db->fetchrow($this->_db->query($nextSql));
                $row['nextOrder'] = (empty($nextrow['nextOrder']) ? 'end' : $nextrow['nextOrder']);
                $list[] = $row;
            }
        }        
        
        $this->_db->freeresult($result);
        return $list;
    } 
    
    function getLevel3List($start,$per_page,$where=1)
    {
        $list = null;

        $sql = "SELECT a.*, b.title as level1_title, b.look_book_cate_id as top_id,  c.title as level2_title FROM look_book_cate a, look_book_cate b, look_book_cate c
WHERE a.parent_id = c.look_book_cate_id
AND c.parent_id = b.look_book_cate_id
AND a.level_id = 3
AND b.level_id = 1
AND c.level_id = 2
{$where}
 ORDER BY a.sort_id DESC LIMIT $start,$per_page";
       
        if( ($result = $this->_db->query($sql)) )
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {    
                $preSql = "SELECT min(`sort_id`) as preOrder FROM `{$this->table['name']}` WHERE `sort_id` > {$row['sort_id']} AND level_id = 3 ";
                $prerow = $this->_db->fetchrow($this->_db->query($preSql));
                $row['preOrder'] = (empty($prerow['preOrder']) ? 'top' : $prerow['preOrder']);
                $nextSql = "SELECT max(`sort_id`) as nextOrder FROM `{$this->table['name']}` WHERE `sort_id` < {$row['sort_id']} AND level_id = 3 ";
                $nextrow = $this->_db->fetchrow($this->_db->query($nextSql));
                $row['nextOrder'] = (empty($nextrow['nextOrder']) ? 'end' : $nextrow['nextOrder']);
                $list[] = $row;
            }
        }        
        
        $this->_db->freeresult($result);
        return $list;
    }        
	
	function getTotal($where=1)
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}`  {$where}";
		//echo $sql;
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
	
	function getCategoryInfo($uid)
	{
		$list = null;
		
		$sql = "SELECT * FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$uid}'";
		
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
	
    
	function delete($aid)
	{
		$sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
		return $this->_db->query($sql);
	}

	function getline($level, $data, $colomn = '' ,$table = '', $equ = '=')
    {
        $list   = null;

        if (empty($table)) {
            $table = " `{$this->table['name']}` ";
        }

        if (empty($colomn)) {
            $colomn = " `{$this->table['key']}` ";
        }

        $sql = "SELECT * FROM {$table} WHERE {$colomn} {$equ} '{$data}'  AND `cate_id`='{$level}'";

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
            $table = " `{$this->table['name']}` ";
        }

        if (empty($colomn)) {
            $colomn = " `{$this->table['key']}` ";
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
        //echo $sql;
        //exit;

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

}
?>