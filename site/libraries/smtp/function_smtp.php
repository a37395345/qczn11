<?
/* SMTP */
$smtp_port		= 25;					    //SMTP �˿�
$smtp_real_cn	= '��������';				//����������

function sendemail($to,$subject,$content){
	return sendemailofimag($to,$subject,$content);
}

function sendemailofimag($to,$subject,$content){
	global $smtp_port,$smtp_real_cn;
	$smtp_host		= 'mail2.imagchina.com';			//SMTP
	$smtp_ip		= '222.73.53.53';			//SMTP
	$smtp_user		= 'ford@sh.imagchina.com';			//�ʼ��ʺ�
	$smtp_pass		= '000123';						//�ʼ�����

	$params['host'] = $smtp_host;		              // SMTP host
	$params['port'] = 25;						      // SMTP port	
	$params['helo'] = $smtp_ip;						  // SMTP ip
	$params['status'] = 2;							  // static class
	$params['auth'] = TRUE;						      // use basic authentication or not
	$params['user'] = $smtp_user;					  // Username for authentication
	$params['pass'] = $smtp_pass;				      // Password for authentication


	$send_params['recipients']	= array($to);		 // ������
	$send_params['headers']		= array(
										'From: "'.$smtp_real_cn.'" <'.$params['user'].'>',	// ������
										'To: '.$to,											// ������
										'Subject: '.$subject,							    // ����
										'MIME-Version: 1.0 ',							    // mime����
										'Content-type: text/html; charset=gb2312 ',			// html
									   );
	$send_params['from']		= $params['user'];				// ������
	$send_params['body']		= $content;						// ����


	$smtp = new smtp($params);
	$info = $smtp->connect();

	if($smtp->send($send_params)){
		//echo '�ʼ����ͳɹ���';
		return true;
	}else{
		//echo '�ʼ�����ʧ�ܣ�';
		return false;
	}
}
?>