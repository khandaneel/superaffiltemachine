<?php
ob_start();
include("config.php");
$id=$_SERVER['QUERY_STRING']; 
mysql_query("UPDATE activity SET status='1' WHERE sno=$id");
ob_end_flush();
?>
