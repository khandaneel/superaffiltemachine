<?php
include("config.php");
 $val=$_SERVER['QUERY_STRING'];
$res= mysql_query("UPDATE tbl_message SET status='0' WHERE id='$val' ");
?>