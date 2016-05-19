<?php  include_once('config.php'); $keyword_key=$_SERVER['QUERY_STRING']; $id=$_SESSION['id'];

 $keyword_keynew= str_replace("%20"," ",$keyword_key);

    $email=$_SESSION['email'];
$reidnew=mysql_query("select * from tbl_registation where email='$email' and session_id='$id'");
$postidnew=mysql_fetch_array($reidnew);  $folderclint=explode(".",$postidnew['domain_name']);
$all_keyword=array();

$check_anchore=mysql_query("SELECT * FROM tbl_internallinking WHERE session_id='$id'");
if(mysql_num_rows($check_anchore)==0)
{

//$keyword_key=mysql_query("select * from wp_posts where session_id='$id' and post_title!='$keyword_keynew' ");

$keyword_key=mysql_query("select * from wp_posts where session_id='$id'");

while($keyword_key1=mysql_fetch_array($keyword_key))
{
    $all_keyword[]=trim($keyword_key1['post_title']);
    
}

 
 for($i=0; $i<mysql_num_rows($keyword_key); $i++)
 {
     if($all_keyword[$i+1]!="")
     {  $linking_value=$all_keyword[$i+1];} else { $linking_value=$all_keyword[$i-1]; }
         
    
    
    $anchorlinklink=trim($all_keyword[$i]);
 
  $res=trim(strtolower($linking_value));
    $postname=str_replace(" ","-",$res);
	$folder_add=$id.$folderclint[0];
	$fold="publish.php?page=";
$anchorlinkl=mysql_real_escape_string("<a href='".$fold.$postname."'>".$linking_value."</a>");
    
    $article=mysql_query("INSERT INTO `tbl_internallinking`(`session_id`, `keyword`, `activatation`, `anchorlink`) VALUES ('$id','$anchorlinklink','1','$anchorlinkl') ");
 }
}



$selectdataanchure=mysql_query("SELECT * FROM tbl_internallinking WHERE session_id='$id' and keyword='$keyword_keynew' ");
    $dataurlnn=mysql_fetch_array($selectdataanchure);
    
    $updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_keynew' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($dataurlnn['anchorlink']."<br>".$textdataPOST['post_content']);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_keynew'");
$updatearticlen=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_keynew' ");
$textdataPOSTn=mysql_fetch_array($updatearticlen);
echo  $textdataPOSTn['post_content'];        

  ?>