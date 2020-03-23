<?
ini_set("memory_limit","512M");
require_once('pop3.php');
require_once('rfc822_addresses.php');
require_once('mime_parser.php');

$pop3 = new POP3("222.73.54.53");

$pop3->pUSERPASS('ford1@sh.imagchina.com','000123');
if($pop3->error){echo 'ERROR: '.$pop3->error; exit(0); }

$messages = $pop3->pLIST();
$i = 0;
while( list($var, $param) = @each($messages)){
	$i++;
	$mime = new mime_parser_class();
	$mime->decode_bodies = 1;
	$mime->ignore_syntax_errors = 1;
	$parameters = array('Data'=>$pop3->pRETR($var));

	if(!$mime->Decode($parameters, $decoded)) {
		echo 'MIME message decoding error: '.$mime->error.' at position '.$mime->error_position . "\n";
	} else {
		echo 'MIME message decoding successful.'."\n";
		$count_msg = count($decoded);
		echo ($count_msg==1 ? '1 message was found.' : $count_msg .' messages were found.'), "\n";
		echo "------------------------------------------------------Data{$i}--------------------------------------------------------------<br>\n";
		for($message = 0; $message < $count_msg; $message++) {

			if($mime->Analyze($decoded[$message], $results)) {
			
				if($results['Subject']=="Undelivered Mail Returned to Sender"){
					$hardline = $i."	".$results['Recipients'][0]['Address']."\n";
					save($hardline,"hardList.txt");
					save($pop3->pRETR($var),"hard/".$var.".eml");
				}else{
					$softline = $i."	".$results['From'][0]['address']."\n";
					save($pop3->pRETR($var),"soft/".$var.".eml");
					save($softline,"softList.txt");
				}
				
			} else {
				echo 'MIME message analyse error: '.$mime->error."\n";
			}
			
		}
		$pop3->pDELE($var);

	}
	//******************************************************************//
	//save($pop3->pRETR($var),$project."/".$var.".eml");
	//sleep(1);
}


function save($somecontent,$filename = 'sendmail.log'){
	   if (!$handle = fopen($filename, 'a')) {
			 echo "open error,$filename";
			 return;
	   }
	   if (fwrite($handle, $somecontent) === FALSE) {
		   echo "write error,$filename";
		   return;
	   }
	   fclose($handle);
}

$pop3->pQUIT();
?>