<?php  ob_start(); require_once('config.php'); 
error_reporting(0);


if(isset($_POST['VedioUrl']))
{
    
    $keyword_key=$_POST['keywordunq'];
    $urlimages=mysql_real_escape_string($_POST['urlimages']);
        $id=$_POST['session_id'];
		
		if (preg_match('/youtube/',$urlimages))
		{
			$urlimages=explode("=",$urlimages);
	$urlimages="//www.youtube.com/embed/".$urlimages[1];
		} else {
			$urlimages=mysql_real_escape_string($_POST['urlimages']);
			}
		
	
	
	
	
		
 $videoeurl="<br><br><iframe src='$urlimages' height='300' width='610' frameborder='0' allowfullscreen ></iframe><br>";
	
	
$updatearticle=mysql_query("SELECT * FROM `wp_posts` WHERE session_id='$id' and post_title='$keyword_key' ");
$textdataPOST=mysql_fetch_array($updatearticle);

$textdataPOST=mysql_real_escape_string($textdataPOST['post_content']."".$videoeurl);

$updatearticle=mysql_query("UPDATE `wp_posts` SET `post_content`='$textdataPOST' WHERE session_id='$id' and post_title='$keyword_key'");

}


header("location:wp_successvideo.php");
ob_end_flush();
?>