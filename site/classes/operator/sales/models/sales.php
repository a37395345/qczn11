<?php
class ModelSales extends Model
{
	
	var $arr_name = array("进行中","洽谈成功","选择其他","客户放弃","主动放弃");
	var $arr_type = array("jpg","jpeg","bmp","gif","png");
	function __construct()
	{
		parent::__construct();
	}
	function getListBySql_a($sql='')
	{
		$list = null;
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	
				$list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	
	function store($data,$table=''){
		if(!$this->_db->insertObject($table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}
	
	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject($table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}
	
	function delete2($aid,$table='',$key='')
	{
		$sql = "DELETE FROM `{$table}` WHERE `{$key}`='{$aid}'";
		return $this->_db->query($sql);
	}
	
	function getInfo($uid,$sql='')
	{
		$list = null;
		if (empty($sql)){
			$sql="SELECT a.*,c.emp_name AS yewuyuan,g.item_name FROM `consulting` AS a ".
			 "LEFT JOIN item AS g ON a.consult_busitype=g.item_paicheType ".
			 "LEFT JOIN `emp` AS c ON a.consult_CounterMan=c.emp_id WHERE a.`consult_id`={$uid}";
		}
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				if (isset($row['consult_startDate'])){
					$row['consult_startDate'] = $row['consult_startDate']>0 ? date("Y-m-d",$row['consult_startDate']) : "";
				}
				if (isset($row['consult_endDate'])){
					$row['consult_endDate'] = $row['consult_endDate']>0 ? date("Y-m-d",$row['consult_endDate']) : "";
				}
				if (isset($row['consult_addtime'])){
					$row['consult_addtime'] = $row['consult_addtime']>0 ? date("Y-m-d",$row['consult_addtime']) : "";
				}
				if (isset($row['negotiate_Date'])){
					$row['negotiate_Date'] = $row['negotiate_Date']>0 ? date("Y-m-d",$row['negotiate_Date']) : "";
				}
				if (isset($row['consult_linker'])){
					$sql="SELECT * FROM `consulting_negotiate` WHERE `consult_id`=".$row['consult_id']." ORDER BY `negotiate_addtime` DESC";
            		$row['negotiate_list'] =$this->getList($sql);
				}
				if (isset($row['contract_startdate'])){
            		$row['contract_startdate'] = date("Y-m-d",$row['contract_startdate']);
            	}
            	if (isset($row['contract_enddate'])){
            		$row['contract_enddate'] = date("Y-m-d",$row['contract_enddate']);
            	}
            	
				if (isset($row['contract_startdate'])){
					$sql="SELECT * FROM `sales_contract_images` WHERE `contract_id`=".$row['contract_id'];
            		$row['contract_imglist'] =$this->getList($sql);
				}
				if (isset($row['consult_linker'])){
					$sql="SELECT * FROM `consulting_images` WHERE `consult_id`=".$row['consult_id'];
            		$row['consulting_imglist'] =$this->getList($sql);
				}
            	
				
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	
	function getListBySql($start,$per_page,$sql='',$op='')
	{
		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	//状态颜色
            	if (isset($row['consult_result'])){
            		if ($row['consult_result']==4){//主动放弃
            			$row["result_status_color"]="#008489";
						$row["result_font_color"]="#FFFFFF";
						$row["consult_result_name"]="主动放弃";
            		}else if($row['consult_result']==3){//客户放弃
            			$row["result_status_color"]="#f000f6";
						$row["result_font_color"]="#FFFFFF";
						$row["consult_result_name"]="客户放弃";
            		}else if($row['consult_result']==2){//选择其他公司
            			$row["result_status_color"]="#0000FF";
						$row["result_font_color"]="#FFFFFF";
						$row["consult_result_name"]="选择其他";
            		}else if($row['consult_result']==1){//成功
            			$row["result_status_color"]="#00FF8F";
						$row["result_font_color"]="#000000";
						$row["consult_result_name"]="洽谈成功";
            		}else{
            			$row["result_status_color"]="#30ff00";
						$row["result_font_color"]="#000000";
						$row["consult_result_name"]="进行中";
            		}
            	}
            	if (isset($row['baoxiao_times'])){
            		$row['baoxiao_times'] = date("Y-m-d H:i:s",$row['baoxiao_times']);
            	}
            	if (isset($row['consult_startDate'])){
            		$row['consult_startDate'] = $row['consult_startDate']>0 ? date("Y-m-d",$row['consult_startDate']) : "—";
            	}
            	if (isset($row['consult_endDate'])){
            		$row['consult_endDate'] = $row['consult_endDate']>0 ? date("Y-m-d",$row['consult_endDate']) : "—";
            	}
            	if (isset($row['consult_addtime'])){
					$row['consult_addtime'] = $row['consult_addtime']>0 ? date("Y-m-d",$row['consult_addtime']) : "";
				}
            	if ($op=="negotiate"){
            		$sql="SELECT * FROM `consulting_negotiate` WHERE `consult_id`=".$row['consult_id']." ORDER BY `negotiate_Date` DESC";
            		$tmp_list=$this->getList($sql);
            		$row['negotiate_count']=count($tmp_list);
            		$row['negotiate_list'] =$tmp_list;
            	}
            	if (isset($row['sms_inputdate'])){
            		$row['sms_inputdate'] = date("Y-m-d H:i:s",$row['sms_inputdate']);
            	}
            	if (isset($row['sms_senddate'])){
            		$row['sms_senddate'] = $row['sms_senddate']>0 ? date("Y-m-d H:i:s",$row['sms_senddate']) : "";
            	}
            	if (isset($row['contract_startdate'])){
            		$row['contract_startdate'] = date("Y-m-d",$row['contract_startdate']);
            	}
            	if (isset($row['contract_enddate'])){
            		$row['contract_enddate'] = date("Y-m-d",$row['contract_enddate']);
            	}
            	
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getTotal($sql)
	{
		$list = null;        

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
	function getList($sql='')
	{
		$list = null;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				if (isset($row['negotiate_Date'])){
            		$row['negotiate_Date'] = $row['negotiate_Date']>0 ? date("Y-m-d",$row['negotiate_Date']) : "—";
            	}
            	if (isset($row['consult_result'])){
            		$row['consult_result_name']=$this->arr_name[$row['consult_result']];
            	}
            	if (isset($row['images'])){
            		$aa=pathinfo($row['images'], PATHINFO_EXTENSION);
            		if (in_array($aa, $this->arr_type)){
            			$row['atttype']='picture';
            		}else{
            			$row['atttype']='document';
            		}
            		$row['filetype']=$aa;
            	}
				$list[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getCarImages($uid,$uid2=''){
		$list1 = null;
		if (!empty($uid))
		$sql = "SELECT * FROM `sales_contract_images` WHERE `contract_id`={$uid} ";
		else
		$sql = "SELECT * FROM `consulting_images` WHERE `consult_id`={$uid2} ";
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row1 = $this->_db->fetchrow($result)) )
			{
				if (isset($row1['images'])){
            		$aa=pathinfo($row1['images'], PATHINFO_EXTENSION);
            		if (in_array($aa, $this->arr_type)){
            			$row1['atttype']='picture';
            		}else{
            			$row1['atttype']='document';
            		}
            		$row1['filetype']=$aa;
            	}
                $list1[] = $row1;
			}
		}
		$this->_db->freeresult($result);
		return $list1;
	}
	function getEmpName($u_id){
    	$list = null;

		$sql = "SELECT `emp_name` FROM `emp` AS a INNER JOIN `admin_users` AS b ON a.emp_id=b.user_id WHERE b.`admin_user_id` ='{$u_id}'";

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row["emp_name"];
			}
		}

		$this->_db->freeresult($result);
		return $list;
    }
}
?>