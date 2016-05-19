<?php include_once('config.php'); $keyword_key1=$_SERVER['QUERY_STRING'];

  $keyword_key= str_replace("%20"," ",$keyword_key1);

$id=$_SESSION['id'];

	 
	 $isdata=mysql_query("DELETE FROM `tbl_youtube` WHERE session_id='$id' and keyword='$keyword_key'");
	
	
	?>