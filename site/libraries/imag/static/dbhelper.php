<?php
/**
 * get source
 */
Class DbHelper{
	
	/**
	 * get array
	 */
	public static function getRow($sql)
	{
		if(empty($sql)){
			return null;
		}
		
		$db = Factory::getDb();
		
		$list = null;
		if( ($result = $db->query($sql)) )
		{
			if ( ($row = $db->fetchrow($result)) )
			{
				$list = $row;
			}
		}
		
		$db->freeresult($result);
		return $list;
	}
}
?>
