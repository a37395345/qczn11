<?php
error_reporting(7);
class msn
{
    private $username = '';
    private $password = '';
    private $status = array();

	private $sbconn;
	private $debug;
	private $trid;
    
    function set_account($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
		//var_dump("username:".$this->username);
		//var_dump("password:".$this->password);
    }

	function msn_connect(){

		$this->status = array("",array());
		
		$this->debug = 0;
		$this->trid = 0;
		$proto = "MSNP10";

		# start here
		$this->status[0] = "通讯协议 $proto";
		$this->status[0] = "开始登录";
		# login now
		$this->sbconn = fsockopen("messenger.hotmail.com",1863) or die("Can't connect to MSN server");
		flush();
		$this->data_out("VER $this->trid $proto CVR0");
		$this->data_in();
		$this->data_out("CVR $this->trid 0x0409 winnt 5.1 i386 MSNMSGR 8.0.0812 MSMSGS ".$this->username);
		$this->data_in();
		$this->data_out("USR $this->trid TWN I ".$this->username);

		$temp = $this->data_in();

		if (!stristr($temp,":")){
			if (substr($temp,0,3)==601){
				#echo "Error: The MSN servers are currently unavailable.";
				$this->status[0] = "很不幸，MSN的服务器又挂了";
				return;
			} else {
				$this->status[0] = "很不幸，MSN的服务器又挂了";
				fclose($this->sbconn);
				return;
			}
		}

		@fclose($this->sbconn);
		$temp_array = explode(" ",$temp);
		$temp_array = explode(":",$temp_array[3]);
		flush();
		$this->sbconn = fsockopen($temp_array[0],$temp_array[1]) or die("error -_-#");
		$this->data_out("VER $this->trid $proto CVR0");
		$this->data_in();
		flush();
		$this->data_out("CVR $this->trid 0x0409 winnt 5.1 i386 MSNMSGR 8.0.0812 MSMSGS ".$this->username);
		$this->data_in();
		$this->data_out("USR $this->trid TWN I ".$this->username);
		$temp = $this->data_in();
		$temp_array = explode(" ",$temp);
		flush();
		$TOKENSTRING = trim(end($temp_array));
		#echo "authenticating";
		$this->status[0] = "身份验证中……";
		//return;
		flush();

		$nexus_socket = fsockopen("ssl://nexus.passport.com",443);
		fputs($nexus_socket,"GET /rdr/pprdr.asp HTTP/1.0\r\n\r\n");

		while ($temp != "\r\n"){
			$temp = fgets($nexus_socket,1024);
			if (substr($temp,0,12)=="PassportURLs"){
				$urls = substr($temp,14);
			}
		}

		$temp_array = explode(",",$urls);
		$temp = $temp_array[1];
		$temp = substr($temp,8);

		$temp_array = explode("/",$temp);
		@fclose($nexus_socket);

		$ssl_conn = fsockopen("ssl://".$temp_array[0],443);
		fputs($ssl_conn,"GET /{$temp_array[1]} HTTP/1.1\r\n");
		fputs($ssl_conn,"Authorization: Passport1.4 OrgVerb=GET,OrgURL=http%3A%2F%2Fmessenger%2Emsn%2Ecom,sign-in=".urlencode($this->username).",pwd=".$this->password.",$TOKENSTRING\r\n");
		fputs($ssl_conn,"User-Agent: MSMSGS\r\n");
		fputs($ssl_conn,"Host: {$temp_array[0]}\r\n");
		fputs($ssl_conn,"Connection: Keep-Alive\r\n");
		fputs($ssl_conn,"Cache-Control: no-cache\r\n\r\n");
		$temp = fgets($ssl_conn,512);

		if (rtrim($temp) == "HTTP/1.1 302 Found"){
			#echo "redirection";
			$this->status[0] = "开始重定向";
			flush();
			while ($temp != "\r\n"){
				$temp = fgets($ssl_conn,256);
				if (substr($temp,0,9)=="Location:"){
					$temp_array = explode(":",$temp);
					$temp_array = explode("/",trim(end($temp_array)));
					break;
				}
			}
			@fclose($ssl_conn);
			$ssl_conn = fsockopen("ssl://".$temp_array[2],443);
			fputs($ssl_conn,"GET /{$temp_array[3]} HTTP/1.1\r\n");
			fputs($ssl_conn,"Authorization: Passport1.4 OrgVerb=GET,OrgURL=http%3A%2F%2Fmessenger%2Emsn%2Ecom,sign-in=".urlencode($this->username).",pwd=".$this->password.",$TOKENSTRING\r\n");
			fputs($ssl_conn,"User-Agent: MSMSGS\r\n");
			fputs($ssl_conn,"Host: {$temp_array[2]}\r\n");
			fputs($ssl_conn,"Connection: Keep-Alive\r\n");
			fputs($ssl_conn,"Cache-Control: no-cache\r\n\r\n");
		} elseif (rtrim($temp)=="HTTP/1.1 401 Unauthorized"){
			#echo "invalidcreds";
			$this->status[0] = "验证失败！";
			@fclose($ssl_conn);
			return;
		} else {
			if (rtrim($temp) != "HTTP/1.1 200 OK"){
				#echo "Unknown HTTP status code: $temp<br>";
				$this->status[0] = "未知状态码 $temp";
				flush();
				return;
			} else {
				#echo "set_bar_len30?";
			}
		}

		while ($temp != "\r\n"){
			$temp = fgets($ssl_conn,1024);
			if (substr($temp,0,19)=="Authentication-Info"){
				$auth_info = $temp;
				$temp = fgets($ssl_conn,1024);
				if (substr($temp,0,14)!="Content-Length"){
					$auth_info.= fgets($ssl_conn,1024);
				}
				break;
			}
		}
		@fclose($ssl_conn);

		$temp_array = explode("'",$auth_info);
		flush();

		$this->data_out("USR $this->trid TWN S {$temp_array[1]}");
		flush();

		$temp=$this->data_in();

		flush();
		$time_since_initmsg = time();
		while(!strstr($temp,"ABCHMigrated") && is_string(trim($temp))){
			if (substr($temp,0,3)=="sid"){
				$sid = trim(substr($temp,5));
			}
			if (substr($temp,0,2)=="kv"){
				$kv = trim(substr($temp,4));
			}
			if (substr($temp,0,7)=="MSPAuth"){
				$mspauth = trim(substr($temp,9));
				flush();
			}
			$temp = $this->data_in();
		}
		$temp = $this->data_in();
		#echo "authenticated<br />";
		$this->status[0] = 200;
		flush();

		#$this->data_out("LST 9 RL");
		#$this->data_in();

		$this->data_out("SYN $this->trid 0 0");
		//#echo "retreiving_contact_list<br />";
		//#echo "正在获取好友列表……<br/><br/>";
		flush();
		stream_set_timeout($this->sbconn,0,125000);

		/* a lazy man doing this :D */
		for($i=0;$i<160;$i++) # some say max is 150
		{
			$temp = $this->data_in();
			switch (substr($temp, 0, 3))
			{
			case "LST":
			$temp_array = explode(" ",$temp);
			$un = substr($temp_array[1], 2);
			$nn = substr($temp_array[2], 2);
			$nn1 = substr($temp_array[2], 0, 1);
			if($nn1 == "F"){
				$this->status[1][] = $un;
				//echo "<a href=\"mailto:$un\">$nn</a><br/>";
			}
			else{
				//echo "曾经的好友: $un<br/>";
			}
			#echo $temp."<br/>";
			break;
			default:
			# no nothing
			break;
			}
		}
		//echo "列表结束";
		@fclose($this->sbconn);
	}

	# end here

	# functions

	function data_out($data){
		fputs($this->sbconn,$data."\r\n");
		$this->trid++;
		if ($this->debug && !empty($data)){ echo "> ".$data."<br>\r\n";}
	}

	function data_in(){
		$temp = fgets($this->sbconn,256);
		if ($this->debug && !empty($temp)){echo "< ".$temp."<br>\r\n";}
		return $temp;
	}

    public function getStatus()
    {
        return $this->status;
    }
}
?>