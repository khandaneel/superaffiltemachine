<?php
ob_start();
include("config.php");
echo $id=$_SERVER['QUERY_STRING']; 
mysql_query("UPDATE activity SET status='0' WHERE sno=$id");
ob_end_flush();
?>