<?php
 /**
 * Database Config
 * @package             includes.config
 * @author gary wang (wangbaogang123@hotmail.com)
*/
class DbConfig{

        var $dbtype   = 'mysql';
        var $host         = 'localhost';
        var $user         = 'aaa';
        var $password = 'root';
        var $db       = 'qczn';

        function getOption(){
                return array(
                                        "host" => $this->host,
                                        "user" => $this->user,
                                        "password" => $this->password,
                                        "database" => $this->db,
                                        "driver"   => $this->dbtype
                );
        }

}
?>
