<?php ob_start(); require_once('config.php'); 
if(isset($_GET['save']))
{
	$sessionid=$_GET['save'];
	$updateto=mysql_query("UPDATE `tbl_lastvisit` SET  `status`=1 WHERE session_id='$sessionid'");
	date_default_timezone_set('Asia/Calcutta');
	 $activtytext=mysql_real_escape_string("Last Visited Page <br> <a href='lastvititpage.php?go=".$sessionid."&URI=".$_GET['URI']."'><span class='samcolor'>Visit Now<span></a>");
	 $timeno=date('h:i:s a', time());
	 $monthday=date("d M");
	 $year=date("Y");
  
 $imgin=mysql_real_escape_string('<img src="images/activity_icon1.png" style="margin-top:-2px;" align="middle" height="18" width="21" />');
   $activity=mysql_query("INSERT INTO `activity`(`activityname`, `email`, `datetime`, `month`, `year`, `sessionid`, `status`,`img`) VALUES ('$activtytext','".$_SESSION['email']."','$timeno','$monthday','$year','".$sessionid."','1','$imgin')");

	header('location:home.php');
	ob_end_flush();
}
if(isset($_GET['go']))
{
	$sessionid=$_GET['go'];
	$updateto=mysql_query("UPDATE `tbl_lastvisit` SET  `status`=2 WHERE session_id='$sessionid'");
	$_SESSION['id']=$sessionid;
	header("location:".$_GET['URI']);
	ob_end_flush();
}
if(isset($_GET['discard']))
{
	$sessionid=$_GET['discard'];
	$updateto=mysql_query("UPDATE `tbl_lastvisit` SET  `status`=3 WHERE session_id='$sessionid'");
	header('location:home.php');
	ob_end_flush();
}




?>