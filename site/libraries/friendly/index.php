<form method="post" action="?act=m">
<div style="margin-top:10px;">
		<p style="margin:10px 0px; font-size:13px;" ><b>����<!--{if $type == 'msn'}-->MSN��ϵ��<!--{else}--><!--{/if}-->�����ĺ�����������</b></p>
		<p style="margin:5px 0px;"><!--{if $type == 'msn'}-->MSN<!--{else}--><!--{/if}-->�ʺţ�<input name="account" type="text" id="account" size="30">
	</p>
		<p style="margin:5px 0px;"><!--{if $type == 'msn'}-->MSN<!--{else}--><!--{/if}-->���룺<input name="passwd" type="password" id="passwd" size="20">
	</p>
		<p style="padding-top:8px; padding-left:60px;"><input name="�ύ" type="submit" class="submit" value="����">
		</p>
  </div>
</form>

<form method="post" action="?act=y">
<div style="margin-top:10px;">
  <p style="margin:10px 0px; font-size:13px;" ><b>���������ͨѶ¼�����ĺ�����������</b></p>
  <p style="margin:5px 0px;"> �����ַ��
      <input name="account" type="text" id="account" size="12" />
      <span style="font-size:14px;">&nbsp;@&nbsp;</span>
      <select name="postoffice" id="postoffice">
        <option value="sina.com" >sina.com</option>
        <option value="sohu.com" >sohu.com</option>
        <option value="163.com" >163.com</option>
        <option value="126.com" >126.com</option>
        <option value="tom.com" >tom.com</option>
        <option value="gmail.com" >gmail.com</option>
        <option value="yahoo.cn" >yahoo.cn</option>
        <option value="yahoo.com" >yahoo.com</option>
        <option value="yahoo.com.cn" >yahoo.com.cn</option>
      </select>
  </p>
  <p style="margin:5px 0px;">�������룺
      <input name="passwd" type="password" id="passwd" size="20" />
  </p>
  <p style="padding-top:8px; padding-left:60px;">
    <input name="button" type="submit" class="submit" value="����" />
  </p>
</div>
</form>


<form action="?act=u" enctype="multipart/form-data" method="post">
			<input type="hidden" name="type" value="card">
			<p style="margin:10px 0px; font-size:13px;" ><b>�ϴ��ʼ���ַ���ļ�(*.CSV��*.VCF)��ѡ���������������������ʼ�</b></p>
			<p>��ѡ���ַ���ļ���<input type="file" size="33" name="cardfile" value=""  style="font-family:Arial;" /></p>
			<p style="padding-top:10px; padding-left:108px; margin:10px 0px;"><input type="submit" value=" �ϴ� " title="�ϴ�" class="submit" /></p>
		</form>
<?php

/**
 * ��������ͨѶ��
 */
$act = $_GET['act'];
if ($act == "y"){
	if(!$_POST['account'] || !$_POST['passwd'] || !$_POST['postoffice']){
		die('error');
	}
	//ȡ����ϵ�� UTF8
	require_once ('mailfactory.php');
	switch ($_POST['postoffice']) {
		case "126.com":
			$contact = new MailFactory(M126);
			break;
		case "sina.com":
			$contact = new MailFactory(MSINA);
			break;
		case "tom.com":
			$contact = new MailFactory(MTOM);
			break;
		case "gmail.com":
			$contact = new MailFactory(MGOOGLE);
			break;
		case "163.com":
			$contact = new MailFactory(M163);
			break;
		case "sohu.com":
			$_POST['account'] = $_POST['account'] . "@" . $_POST['postoffice'];
			$contact = new MailFactory(MSOHU);
			break;
		case "vip.sohu.com":
			$_POST['account'] = $_POST['account'] . "@" . $_POST['postoffice'];
			$contact = new MailFactory(MSOHU_VIP);
			break;
		case "yahoo.cn":
		case "yahoo.com":
		case "yahoo.com.cn":
			$_POST['account'] = $_POST['account'] . "@" . $_POST['postoffice'];
			$contact = new MailFactory(MYAHOO);
			break;
		default:
			die("error");
	}
	$contacts = $contact->getContactList($_POST['account'], $_POST['passwd']);

	if($contacts == 0) die('error');
	if(empty($contacts)) die('empty');

	if($_POST['postoffice'] == "sina.com" || $_POST['postoffice'] == "sohu.com" || $_POST['postoffice'] == "vip.sohu.com" ) {
		echo diff_contacts($contacts);
	} else {
		echo diff_contacts(array_flip($contacts));
	}
	exit;
}

/**
 * ��������ͨѶ��
 */
elseif ($act == "m"){
	if(!$_POST['account'] || !$_POST['passwd']){
		die('error');
	}
	include('msn.class.php');
	$msn2 = new msn;
	$returned_emails = $msn2->qGrab($_POST['account'], $_POST['passwd']);
	diff_contacts($returned_emails);
	exit;
}

/**
 * ����FOXMAILͨѶ��
 */
elseif ($act == "u"){
	if(empty($_FILES['cardfile']) || $_FILES['cardfile']['size'] <= 0) {
		$ret = 'error';
	} else {
		$content = file_get_contents($_FILES['cardfile']['tmp_name']);
		preg_match_all("/[a-z0-9_\.\-]+@[a-z0-9\-]+\.[a-z]{2,6}/i", $content, $matches);
		if(($emails = array_unique($matches[0])) !=false) {
			$ret = diff_contacts(array_flip($emails));
		} else {
			$ret = "empty";
		}
		unset($matches);
	}
	/*echo "<script language=javascript>alert('".addslashes($ret)."');</script>";*/
	exit;
}

	function  diff_contacts($rel){
		var_dump($rel);
	}

?>