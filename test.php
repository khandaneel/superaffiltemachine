<?php
/**$chekey=trim("Muscle Builder");
	$chekey1=substr($chekey, 0, -1);
	echo $chekey1;*/
	session_start();
	mysql_connect("localhost","superaff_taqi786","superaff_taqi786");
mysql_select_db("superaff_admin_taqi");
$res=mysql_query("select * from tbl_db where status='0'");
$res1=mysql_fetch_assoc($res);


$db_user = $res1['username'];
 $db_pass = $res1['pwd'];
$db_name=$res1['dbname'];
$id=$_SESSION['id'];
mysql_query("UPDATE tbl_db SET `status`=1,`usersession`='$id' WHERE `username`='$db_user' ");
?>