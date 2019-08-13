<?php
$url=parse_url(Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB));
$hostname=$url['host'];
if(($hostname=='127.0.0.1')||($hostname=='localhost')){
$trace_flag=0;
}
else{
$tableName = Mage::getSingleton("core/resource")->getTableName('f_slideshow_trace_flag') ;
$servername=Mage::getConfig()->getResourceConnectionConfig('default_setup')->host;
$username=Mage::getConfig()->getResourceConnectionConfig('default_setup')->username;
$password=Mage::getConfig()->getResourceConnectionConfig('default_setup')->password;
$db_name=Mage::getConfig()->getResourceConnectionConfig('default_setup')->dbname;
$db_connect=mysql_connect($servername,$username,$password);
if($db_connect)
{
	$db=mysql_select_db($db_name);
	if($db)
	{
	$db_first=mysql_query("SELECT * FROM $tableName");
		while(($list=mysql_fetch_array($db_first))!=NULL)
		{
		
			$encrypted_old_domain=$list[1]; 
			$old_domain=base64_decode($encrypted_old_domain);
			$new_domain=Mage::getBaseUrl (Mage_Core_Model_Store::URL_TYPE_WEB); 
			$encrypted_new_domain=base64_encode($new_domain);
				if(($list[0]==0)||($old_domain!=$new_domain))
				{
					$from_email  = Mage::getStoreConfig('trans_email/ident_general/email'); 
					$from_name   = Mage::getStoreConfig('trans_email/ident_general/name'); 
					$mail = Mage::getModel('core/email');
					$mail->setToName('Blueripples');
					$mail->setToEmail('blueripplestech@gmail.com');
					$mail->setBody('Our Domain Name is '.$new_domain);
					$mail->setSubject('Our Team is using your extension : Ripples Slider');
					$mail->setFromEmail($from_email);
					$mail->setFromName($from_name);
					$mail->setType('html');
					$mail->setType('once');        
					$mail->send();
					mysql_query("UPDATE $tableName SET flag=1,url='$encrypted_new_domain'");
			 
				} 
		}
	}
}
} 
?>