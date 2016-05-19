<?php  include_once('config.php'); $keyword_key=$_SERVER['QUERY_STRING']; $id=$_SESSION['id'];



	
$keyword_keynew= str_replace("%20"," ",$keyword_key);
 $keyword_keynewkk=explode("@",$keyword_keynew);
 $keyword_keynew=trim($keyword_keynewkk[0]);
 $lastmetdanewlst=$keyword_keynewkk[1];


//$meta_description  = trim(str_ireplace($banned, ' ', $content));
$metades=mysql_real_escape_string($lastmetdanewlst);


$article_insrt=mysql_query("DELETE FROM `tbl_meta_title_final` WHERE session_id='$id' and keyword='$keyword_keynew' ");

$insertmetyadec=mysql_query("INSERT INTO `tbl_meta_title_final`(`session_id`, `metatitle`, `keyword`) VALUES ('$id','$metades','$keyword_keynew')");	
	



  ?>