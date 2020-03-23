<?php
import('model.BaseModel');
import('model.Admin_rule');
import('model.Department');
import('model.Zemp_zhiwei');

class emp extends BaseModel
{
    //const ZHIWEI_SHOP = [62,83];        // 需要查门店的职位id
    const MANAGER_ID = 46;              // 总经理id
    /**
     * 根据用户ID查询用户名
     * @param $id
     * @return string
     */
    public static function getNameById($id)
    {
        if(empty($id) || $id <= 0){
            return '';
        }
        $base = new BaseModel();
        $name = $base->select('emp', 'emp_name', [['and', 'emp_id', $id]]);
        if(isset($name[0]['emp_name'])){
            return $name[0]['emp_name'];
        }
        return '用户不存在';
    }




    public static function checkLimit($rule)
    {
        $debug = false;
        $id = $_SESSION['user_id'];
        $rule_id = Admin_rule::find('id', [['and', 'name', $rule]]);
        if($rule_id){
            $rule_id = $rule_id[0]['id'];
            $user_info = self::find('emp_zhiweiid',[['and', 'emp_id', $id]]);
            if($user_info){
                $user_info = $user_info[0];

                $zhiwei = Zemp_zhiwei::find('rules', [['and', 'id', $user_info['emp_zhiweiid']]]);
                if(isset($zhiwei[0]['rules'])){
                    $zhiwei_rules = $zhiwei[0]['rules'];
                    if(!empty($zhiwei_rules)){
                        $zhiwei_rules = explode(',', $zhiwei_rules);
                        if(in_array($rule_id, $zhiwei_rules)){
                            return true;
                        }
                        if($debug)
                            echo '不在职位权限中';
                        // 不在职位权限中
                        return false;
                    }
                    if($debug)
                        echo '职位无权限';
                    // 职位无权限
                    return false;
                }
            }
            if($debug)
                echo '用户不存在';
            // 用户不存在
            return false;
        }else{
            if($debug)
                echo '权限未添加';
            // 权限未添加
            return false;
        }
    }

    /**
     * 根据权限获取对应权限用户id
     * @param $rule
     * @return array|null
     */
    public static function messageGroup($rule)
    {
        $rules = Admin_rule::find('id',[['and', 'name', $rule]]);
        if(isset($rules[0]['id'])){
            $rule_id = $rules[0]['id'];
            $zhiwei = Zemp_zhiwei::find('id,rules');
            $zhiwei_group = [];
            foreach ($zhiwei as $value){
                $zhiwei_rules = explode(',', $value['rules']);
                if(in_array($rule_id, $zhiwei_rules)){
                    $zhiwei_group[] = $value['id'];
                }
            }

            if(empty($zhiwei_group)) {
                echo '暂无职位拥有该权限：'.$rule;
                die;
            }

            $where = [];
            foreach ($zhiwei_group as $val){
                $where[] = ['or', 'emp_zhiweiid', $val];
            }
            $users = Emp::find('emp_id', $where);

            if(empty($users)){
                echo '以下职位暂无人员：'.implode(',', $zhiwei_group);
                die;
            }
            $user_id=null;
            foreach ($users as $v){
                if(self::checkEmpActive($v['emp_id'])){
                    // 判断是否为在职
                    $user_id[] = $v['emp_id'];
                }
            }
           
            return $user_id;
        }else{
            echo '暂无该权限：'.$rule;
            die;
        }
    }


    /**
     * 根据id获取下属职位id
     * @param $uid
     * @return array zhiwei_list
     */
    public static function getEmp($uid)
    {
        $zhiwei_list = [];
        if($_SESSION['department_id'] != Department::MANAGER){
            // 非管理部
            $pid = $_SESSION['zhiwei_id'];

            $result = Zemp_zhiwei::getIdByPid($pid);        // 下属职位id
            if($result != null){
                foreach ($result as $value){
                    $zhiwei_list[] = $value;
                    $result2 = Zemp_zhiwei::getIdByPid($value);
                    if($result2 != null){
                        foreach ($result2 as $value2){
                            $zhiwei_list[] = $value2;
                            $result3 = Zemp_zhiwei::getIdByPid($value2);
                            if($result3 != null){
                                foreach ($result3 as $value4){
                                    $zhiwei_list[] = $value4;
                                    $result4 = Zemp_zhiwei::getIdByPid($value4);
                                    if($result4 != null){
                                        foreach ($result4 as $value5){
                                            $zhiwei_list[] = $value5;
                                            $result5 = Zemp_zhiwei::getIdByPid($value5);
                                            if($result5 != null){
                                                foreach ($result5 as $value6){
                                                    $zhiwei_list[] = $value6;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }else{
            // 管理部

            $zhiwei = Zemp_zhiwei::find('charge_department', [['and', 'id', $_SESSION['zhiwei_id']]]);

            if($zhiwei != false && $zhiwei != []){
                $charge = $zhiwei[0]['charge_department'];
                $charge = explode(',', $charge);
                foreach ($charge as $val){
                    $res = Zemp_zhiwei::find('id', [['and', 'department_id', $val]]);
                    if($res != false && $res != []){
                        $zhiwei_list = array_merge($zhiwei_list, CommonFunction::array_column($res, 'id'));
                    }
                }
            }else{
                echo 'system error!';
                die;
            }

        }

        return $zhiwei_list;
    }


    /**
     * 根据职位id获取用户id
     * @param $zhiwei_list
     * @return array user_list
     */
    public static function getUserListByZhiwei($zhiwei_list)
    {
        $user_list = [];
        $zhiwei_sql = '';
        $shop_sql = '';
        foreach ($zhiwei_list as $value){
            if(empty($zhiwei_sql)){
                $zhiwei_sql = " (emp_zhiweiid = $value ";
            }else{
                $zhiwei_sql .= " OR emp_zhiweiid = $value ";
            }
        }
        if(!empty($zhiwei_sql)) {
            $zhiwei_sql .= ')';
        }else{
            return [];
        }

        if(in_array($_SESSION['zhiwei_id'], [61,83,62])){
            $shopid = $_SESSION['shopid'];
            $shop_sql = " emp_shopid = $shopid ";
        }

        $whereSql = '';
        if(empty($zhiwei_sql)){
            if(!empty($shop_sql)){
                $whereSql = " WHERE $shop_sql ";
            }
        }else{
            if(!empty($shop_sql)){
                $whereSql = " WHERE $zhiwei_sql AND $shop_sql ";
            }else{
                $whereSql = " WHERE $zhiwei_sql ";
            }
        }
        if(empty($whereSql)){
            $whereSql = " WHERE emp_stutas = 1 ";
        }else{
            $whereSql .= " AND emp_stutas = 1 ";
        }
        $sql = "SELECT emp_id FROM emp $whereSql";

        $result = self::findBySql($sql);

        if($result != [] && $result != false){
            $user_list = array_merge($user_list, CommonFunction::array_column($result, 'emp_id'));
        }

        return $user_list;
    }


    /**
     * 根据id获取职位id
     * @param $uid
     * @return int
     */
    public static function getZhiwei($uid)
    {
        $result = self::find('emp_zhiweiid',[['and', 'emp_id', $uid]]);
        if($result != false){
            $zhiweiid = $result[0]['emp_zhiweiid'];
            return intval($zhiweiid);
        }else{
            echo '用户不存在';die;
        }
    }

    /**
     * 根据id获取门店id
     * @param $uid
     * @return int|string
     */
    public static function getShop($uid)
    {
        $result = self::find('emp_shopid',[['and', 'emp_id', $uid]]);
        if($result != false){
            $shopid = $result[0]['emp_shopid'];
            return intval($shopid);
        }else{
            echo '用户不存在';die;
        }
    }


    /**
     * 根据用户id获取领导emp_id
     * @param $uid
     * @return array
     */
    public static function getLeaders($uid){
        $zhiwei = self::getZhiwei($uid);
        $current_zhiwei = $zhiwei;

        do{
            $leader = Zemp_zhiwei::getPid($zhiwei);        // 获取上级职位id

            $where = [];
            $where[] = ['and', 'emp_zhiweiid', $leader];
            $where[] = ['and', 'emp_stutas', 1];

            if(in_array($zhiwei, [62,83])){
                $shop = self::getShop($uid);
            }else{
                unset($shop);
            }

            if(isset($shop)){
                $where[] = ['and', 'emp_shopid', $shop];
            }

            $result = self::find('emp_id', $where);
            $zhiwei = $leader;
        }while($result == [] && $zhiwei != 0);

        if($zhiwei == 0){
            // 当前部门走到顶  找上级部门

            $department = Zemp_zhiwei::getDepartment($current_zhiwei);
            $department_pid = Department::getDepartmentPid($department);

            if($department_pid != Department::MANAGER){
                // 非管理部
                echo 'system error';die;
            }else{
                $result_ids = [];
                $manager_zhiwei = Zemp_zhiwei::find('id,charge_department', [['and', 'department_id', Department::MANAGER]]);
                if($manager_zhiwei != false && $manager_zhiwei != []){
                    foreach ($manager_zhiwei as $value){
                        $charge = explode(',', $value['charge_department']);
                        if(in_array($department, $charge)){
                            // 有负责该部门的副总
                            $result = self::find('emp_id', [['and', 'emp_zhiweiid', $value['id']]]);
                            if($result != [] && $result != false){
                                // 返回负责副总
                                foreach ($result as $val){
                                    $result_ids[] = $val['emp_id'];
                                }
                                return $result_ids;
                            }
                            echo 'system error!';die;
                        }
                    }

                    // 无负责副总 则总经理
                    $result = self::find('emp_id', [['and', 'emp_zhiweiid', Zemp_zhiwei::HEAD_MANAGER]]);  // 总经理 58
                    if($result != [] && $result != false){
                        $result_ids = [];
                        foreach ($result as $value){
                            $result_ids[] = $value['emp_id'];
                        }
                        return $result_ids;
                    }
                }
            }
        }else{
            // 当前部门上级职位id
            if($result != [] && $result != false){
                $result_ids = [];
                foreach ($result as $value){
                    $result_ids[] = $value['emp_id'];
                }
                return $result_ids;
            }else{
                echo 'system error';die;
            }
        }
    }



    /**
     * 检查用户是否在职
     * @param $id
     * @return bool
     */
    public static function checkEmpActive($id)
    {
        $user = Emp::find('emp_stutas', [['and', 'emp_id', $id]]);
        if(isset($user[0]['emp_stutas'])){
            if($user[0]['emp_stutas'] == 1){
                return true;
            }
        }
        return false;
    }





    public static function find($field = '*', $where = [], $order = [], $limit = 0)
    {
        $base = new BaseModel();
        return $base->select('emp', $field, $where, $order, $limit);
    }

    public static function findBySql($sql)
    {
        $base = new BaseModel();
        return $base->selectBySql($sql);
    }
}