<?php  ob_start(); include("config.php");   ?>
<?php 
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$remember=$_POST['remember'];
	
$rerecord=mysql_query("SELECT * FROM `tbl_user_registation` WHERE `email`='$email' and `password`='$password' and `status`='1' ");

if(mysql_num_rows($rerecord)==1)
{
	if($remember=="yes")
	{$expire=time()+60*60*24*30;
setcookie("email", $_POST['email'], $expire);
setcookie("password", $_POST['password'], $expire);
setcookie("remember", $_POST['remember'], $expire);
	} else { setcookie ("email", "", time() - 3600); setcookie ("password", "", time() - 3600); setcookie ("remember", "", time() - 3600);}
	$_SESSION['email']=$email;
$res_cpanel=mysql_query("select * from tbl_wel_cpanel where email='$email' ");
if(mysql_num_rows($res_cpanel)>0)
{
header("location:home.php");
}
else{
header("location:home.php");
}
	

}
else 
{
	header("location:loginerror.php");
}
}
ob_end_flush();
?>