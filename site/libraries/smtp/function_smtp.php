<?
/* SMTP */
$smtp_port		= 25;					    //SMTP 端口
$smtp_real_cn	= '长安福特';				//发件人姓名

function sendemail($to,$subject,$content){
	return sendemailofimag($to,$subject,$content);
}

function sendemailofimag($to,$subject,$content){
	global $smtp_port,$smtp_real_cn;
	$smtp_host		= 'mail2.imagchina.com';			//SMTP
	$smtp_ip		= '222.73.53.53';			//SMTP
	$smtp_user		= 'ford@sh.imagchina.com';			//邮件帐号
	$smtp_pass		= '000123';						//邮件密码

	$params['host'] = $smtp_host;		              // SMTP host
	$params['port'] = 25;						      // SMTP port	
	$params['helo'] = $smtp_ip;						  // SMTP ip
	$params['status'] = 2;							  // static class
	$params['auth'] = TRUE;						      // use basic authentication or not
	$params['user'] = $smtp_user;					  // Username for authentication
	$params['pass'] = $smtp_pass;				      // Password for authentication


	$send_params['recipients']	= array($to);		 // 收信人
	$send_params['headers']		= array(
										'From: "'.$smtp_real_cn.'" <'.$params['user'].'>',	// 发信人
										'To: '.$to,											// 收信人
										'Subject: '.$subject,							    // 标题
										'MIME-Version: 1.0 ',							    // mime类型
										'Content-type: text/html; charset=gb2312 ',			// html
									   );
	$send_params['from']		= $params['user'];				// 发信人
	$send_params['body']		= $content;						// 内容


	$smtp = new smtp($params);
	$info = $smtp->connect();

	if($smtp->send($send_params)){
		//echo '邮件发送成功！';
		return true;
	}else{
		//echo '邮件发送失败！';
		return false;
	}
}
?>