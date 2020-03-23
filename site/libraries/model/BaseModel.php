<?php


class BaseModel
{
    protected $pdo;

    public function __construct()
    {
        import("config.dbconfig");
        $dbconfig = new DbConfig();
        $config = $dbconfig->getOption();
        $pdo = new PDO($config['driver'].":host=".$config['host'].";dbname=".$config['database'],$config['user'],$config['password']);
        $pdo->exec('set names utf8');
        $this->pdo = $pdo;
    }

    protected function selectAll($dbname, $field = '*')
    {
        $sql = "SELECT $field FROM `$dbname`";
        $date = $this->pdo->query($sql);
        $date = $date->fetchAll(\PDO::FETCH_ASSOC);
        return $date;
    }

    // where [['and', 'field', 'value', '=']]
    // order ['field' => 'asc', 'field2' => 'desc']
    protected function select($dbname, $field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $wheresql = '';
        if(count($where) > 1){
            $wheresql = '';
            foreach ($where as $value){
                $equal = isset($value[3]) ? $value[3] : ' = ';
                if(empty($wheresql)){
                    $wheresql = $value[1] . " $equal '" . $value[2] . "'";
                }else{
                    $wheresql .= ' ' . $value[0] . ' ' . $value[1] . " $equal '" . $value[2] . "'";
                }
            }
        }else{
            if(isset($where[0])){
                $type = isset($where[0][3]) ? $where[0][3] : ' = ';
                $wheresql = $where[0][1] . " $type '" . $where[0][2] . "'";
            }
        }

        $ordersql = '';
        if(is_array($order) && count($order) > 0){
            foreach ($order as $key => $value) {
                if(!empty($ordersql)){
                    $ordersql .= ',';
                }
                $ordersql .= "$key " . strtoupper($value);
            }
        }
        $wheresql = empty($wheresql) ? '' : ' WHERE ' . $wheresql;
        $ordersql = empty($ordersql) ? '' : ' ORDER BY ' . $ordersql;

        $limitsql = '';
        if($limit){
            $limitsql = "LIMIT $limit";
        }

        $offsetsql = '';
        if($offset){
            $offsetsql = "OFFSET $offset";
        }

        $sql = "SELECT $field FROM $dbname $wheresql $ordersql $limitsql $offsetsql";
        $date = $this->pdo->query($sql);
        $date = $date->fetchAll(PDO::FETCH_ASSOC);

        return $date;
    }


    public function selectBySql($sql)
    {
        $date = $this->pdo->query($sql);
        $date = $date->fetchAll(PDO::FETCH_ASSOC);

        return $date;
    }


    /**
     * 新增数据
     * date ['id' => 12, 'name' => 'test']
     * @param $dbname
     * @param $date
     * @return bool|false|int
     */
    public function insert($dbname, $date)
    {
        $field = '';
        $value = '';
        if(is_array($date) && count($date) > 0){
            foreach ($date as $key => $val)
            {
                if($field != ''){
                    $field .= ",$key";
                    $value .= ",'$val'";
                }else{
                    $field = $key;
                    $value = "'$val'";
                }
            }
        }

        if($field != '' && $value != ''){
            $sql = "INSERT INTO $dbname($field) VALUES($value)";
            return $this->pdo->exec($sql);
        }
        return false;
    }

    // date ['field1' => 'value1', 'field2' => 'value2']
    // where [['and', 'field', 'value', '=']]
    protected function updates($dbname, $date = [], $where = [])
    {
        $setsql = '';
        if(is_array($date) && count($date) > 0){
            foreach ($date as $key => $value){
                if(empty($setsql)){
                    $setsql = " $key = '$value'";
                }else{
                    $setsql .= ", $key = '$value'";
                }
            }
        }

        $wheresql = '';
        if(is_array($where) && count($where) > 0){
            foreach ($where as $var){
                $type = isset($var[3]) ? $var[3] : '=';
                if(empty($wheresql)){
                    $wheresql = $var[1] . " $type " . $var[2];
                }else{
                    $wheresql .= ' ' . $var[0] . ' ' . $var[1] . " $type " . $var[2];
                }
            }
        }

        $sql = "UPDATE $dbname SET $setsql WHERE $wheresql";
        $result = $this->pdo->exec($sql);

        return $result !== false ? $result : false;

    }

    public function deletes($dbname, $where = [])
    {
        $wheresql = '';
        if(is_array($where) && count($where) > 0){
            foreach ($where as $var){
                $type = isset($var[3]) ? $var[3] : '=';
                if(empty($wheresql)){
                    $wheresql = $var[1] . " $type " . $var[2];
                }else{
                    $wheresql .= ' ' . $var[0] . ' ' . $var[1] . " $type " . $var[2];
                }
            }
        }

        $sql = "DELETE FROM $dbname WHERE $wheresql";
        $result = $this->pdo->exec($sql);

        return $where !== false ? $result : false;
    }

    public function getLastId()
    {
        return $this->pdo->lastInsertId();
    }
}