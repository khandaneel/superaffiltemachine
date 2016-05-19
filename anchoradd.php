<?php session_start(); include_once('config.php'); $keyword_key=$_SERVER['QUERY_STRING'];

$keyword_key= str_replace("%20"," ",$keyword_key);

$id=$_SESSION['id'];
// $id="534seo";

$active_updt=mysql_query("UPDATE `tb_anchoretext` SET `activatation`='1' WHERE session_id='$id' and keyword='$keyword_key'");

$anchore=mysql_query("SELECT * FROM `tb_anchoretext` WHERE session_id='$id' and keyword='$keyword_key' and activatation='1'"); 
						
						if(mysql_num_rows($anchore)==0)
						{
$anchore=mysql_query("SELECT * FROM `tb_anchoretext` WHERE where session_id='$id' and activatation='1'  limit 1,1"); 
						}
						
						$anchoretext=mysql_fetch_array($anchore);
						 if(!empty($anchoretext['anchoretext']))
										{  echo $anchoretext['anchoretext']."<br>" ;}  
?>
 
 

 
