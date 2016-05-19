<?php ob_start(); require_once('config.php'); 

 if(isset($_GET['menuactive']))
{$keyword_key=$_GET['menuactive'];
    $id=$_SESSION['id'];

		$delet=mysql_query("DELETE FROM `tbl_article` WHERE session_id='$id' and keyword='$keyword_key' ");

header("Location:wp.php?menuactive=$keyword_key");
ob_end_flush();
}
?>

<?php 

 