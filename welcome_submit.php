<?php
ob_start(); include("config.php");
$name=$_GET['name'];
$email=$_GET['email'];
$cpanel_username=$_GET['cusername'];
$cpanel_password=$_GET['cpassword'];
$hostname=$_GET['srevreurl'];
$server_url=$_GET['hostingurl'];
$server_username=$_GET['susername'];
$server_password=$_GET['spass'];


/*::::: server :::::*/
	$res=mysql_query("INSERT INTO tbl_wel_server (`url`, `username`, `password`, `email`) VALUES ('$server_url', '$server_username', '$server_password', '$email')");
	/*::::: capnel :::::::*/
	$res=mysql_query("INSERT INTO tbl_wel_cpanel (`username`, `password`, `email`, `hostname`) VALUES ('$cpanel_username', '$cpanel_password', '$email','$hostname')");

	header("location:home.php");	

	ob_end_flush();
?>